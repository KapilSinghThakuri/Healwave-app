<?php

namespace App\Http\Controllers\General_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Barryvdh\DomPDF\Facade\Pdf;

class PatientAppointmentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        $doctorId = $doctor->id;
        $appointments = $doctor->appointments;
        return view('general_dashboard.doctor_dashboard.appointment.appointments', compact('appointments'));
    }

    public function patientsIndex()
    {
        $user = Auth::user();
        $doctor = $user->doctor;
        $appointments = $doctor->appointments;
        return view('general_dashboard.doctor_dashboard.patient.patients', compact('appointments'));
    }

    public function show($appointmentId)
    {
        $appointments = Appointment::where('id', $appointmentId)->first();
        return view('general_dashboard.doctor_dashboard.appointment.view-appointment', compact('appointments'));
    }

    public function generateAppointmentPdf($appointmentId)
    {
        $appointments = Appointment::where('id', $appointmentId)->first();
        $data = [
            'title' => 'Patients Appointment',
            'date' => date('m/d/y'),
            'appointments' => $appointments,
        ];
        // $title = 'Patients Appointment';
        // $date = date('y/m/d');
        // return view('general_dashboard.doctor_dashboard.appointment.generateAppPdf', compact('appointments', 'title', 'date'));

        $pdf = Pdf::loadView('general_dashboard.doctor_dashboard.appointment.generateAppPdf', $data);
        return $pdf->download('PatientAppointment.pdf');
    }
}
