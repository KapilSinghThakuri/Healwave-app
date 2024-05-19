<?php

namespace App\Http\Controllers\Admin_Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view patient', ['only' => ['index']]);
    }

    public function index()
    {
        $patients = Patient::orderBy('created_at', 'desc')->simplePaginate(8);
        $patients->withPath('');
        return view('admin_Panel.patient.patients', compact('patients'));
    }

    public function searchPatient(Request $request)
    {
        $searchedInput = $request->searchedInput;
        $outputData = Patient::where('fullname', 'LIKE', '%' . $searchedInput . '%')
            ->orWhere('email', 'LIKE', '%' . $searchedInput . '%')
            ->orWhere('permanent_address', 'LIKE', '%' . $searchedInput . '%')->get();

        return response()->json(['data' => $outputData], 200);
    }
}
