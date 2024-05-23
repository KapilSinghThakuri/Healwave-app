<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\Department;
use App\Models\Appointment;
use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Notifications\AppointmentNotification;
use Carbon\Carbon;
use Exception;

class GeneralDashboardController extends Controller
{
    protected $pages;
    protected $doctor;
    protected $schedule;
    public function __construct(DynamicPage $pages, Doctor $doctor, Schedule $schedule)
    {
        $this->pages = $pages;
        $this->doctor = $doctor;
        $this->schedule = $schedule;
    }

    public function index()
    {
        $departments = Department::all();
        if ($departments) {
            $dept_related_doctor = Department::with('doctors')->first();
            if ($dept_related_doctor !== null) {
                $first_dept_doctors = $dept_related_doctor->doctors;
            }
        }
        $doctors = Doctor::with('appointments')->get();
        $schedules = Schedule::all();
        $appointments = Appointment::get();

        $pages = $this->pages->get();
        return view(
            'website.index',
            compact(
                'departments',
                'doctors',
                'first_dept_doctors',
                'schedules',
                'appointments',
                'pages'
            )
        );
    }

    // for test
    public function getAvailableDays($doctorId)
    {
        $currentDate = Carbon::now('Asia/Kathmandu');
        $currentTime = $currentDate->format('H:i A');
        $currentDay = $currentDate->format('l');

        $schedules = Schedule::where('doctor_id', $doctorId)->where('status','available')->get();
        if(!$schedules){
            return null;
        }

        $daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $currentDayIndex = array_search($currentDay, $daysOfWeek);

        $nextAvailableDays = [];
        
        foreach ($schedules as $schedule) {
            $dayIndex = array_search($schedule->days, $daysOfWeek);

            $totalQuota = $schedule->total_quota;
            $totalAppCount = $schedule->appointments->count();
            if($totalQuota == $totalAppCount){
                if ($dayIndex >= $currentDayIndex)
                {
                    if($dayIndex == $currentDayIndex && $currentTime >= $schedule->from) {
                        continue;
                    }
                    // Calculate the date of the next occurrence of the schedule day within this week
                    $daysUntilNext = $dayIndex - $currentDayIndex;
                    $nextOccurrenceDate = $currentDate->copy()->addDays($daysUntilNext);

                    $nextAvailableDays[] = [
                        'date' => $nextOccurrenceDate->format('Y-m-d'),
                        'day' => $nextOccurrenceDate->format('l'),
                        'timeInterval' => $schedule->from.' - '. $schedule->to,
                    ];
                }
            }
        }

        return $nextAvailableDays;
    }

    public function changeLanguage(Request $request, $locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return back();
    }

    public function appointment($doctorId, Request $request)
    {
        $doctor = $this->doctor->findOrFail($doctorId);
        $scheduleId = $request->schedule_id;
        $schedule = $this->schedule->findOrFail($scheduleId);
        $checkUpInterval = $schedule->from . ' - ' . $schedule->to ;
        $checkUpDay = $schedule->days;
        return view('website.appointment.appointment-form',compact('doctor', 'checkUpInterval', 'checkUpDay', 'scheduleId'));
    }

    public function appointmentStore(AppointmentRequest $request)
    {
        $validatedData = $request->validated();
        DB::beginTransaction();
        try {
            if ($request->hasFile('medical_history')) {
                $file = $request->file('medical_history');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $filePath = 'general_Assets/medical-history/';
                $file->move(public_path($filePath), $fileName);
                $validatedData['medical_history'] = $filePath . $fileName;
            }
            $patient = Patient::create($validatedData);

            $validatedData['patient_id'] = $patient->id;
            $validatedData['status'] = 'pending';

            $appointment = Appointment::create($validatedData);

            $users = User::role(['Super Admin', 'Administrator'])->get();
            foreach ($users as $user) {
                $user->notify(new AppointmentNotification($appointment, $patient, 'appointment_create'));
            }
            $patient->notify(new AppointmentNotification($appointment, $patient, 'appointment_create'));

            DB::commit();
            return redirect()->route('general.dashboard')->with('message', 'Your Appointment Send Successfully !!!');
        } catch (Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
}
