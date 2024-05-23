<?php

namespace App\Http\Controllers\Admin_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorScheduleRequest;
use Carbon\CarbonPeriod;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Appointment;

class DoctorScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view schedule', ['only' => ['index']]);
        $this->middleware('permission:create schedule', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit schedule', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete schedule', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::with('appointments')->orderBy('created_at', 'desc')->simplePaginate(5);
        $schedules->withPath('');
        $appointments = Appointment::get();
        return view('admin_Panel.doctor_schedule.schedule', compact('schedules', 'appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('admin_Panel.doctor_schedule.add-schedule', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorScheduleRequest $request)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['days'])) {
            foreach ($validatedData['days'] as $key => $day) {
                Schedule::create([
                    'doctor_id' => $validatedData['doctor_id'],
                    'days' => $validatedData['days'][$key],
                    'from' => $validatedData['from'],
                    'to' => $validatedData['to'],
                    'status' => $validatedData['status'],
                    'total_quota' => $validatedData['total_quota'],
                ]);
            }
        }

        return redirect()->route('schedule.index')->with('message', 'Doctor Schedule has been set successfully !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = Doctor::all();
        $schedule = Schedule::findOrFail($id);
        return view('admin_Panel.doctor_schedule.edit-schedule', compact('schedule', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DoctorScheduleRequest $request, $id)
    {
        $validatedData = $request->validated();

        $schedule = Schedule::where('id', $id)->first();
        if ($schedule) {
            $schedule->update($validatedData);
        }

        return redirect()->route('schedule.index')->with('message', 'Doctor Schedule has been updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        if ($schedule) {
            $schedule->delete();
        }
        return redirect()->route('schedule.index')->with('message', 'Doctor Schedule has been deleted successfully!!!');
    }
}
