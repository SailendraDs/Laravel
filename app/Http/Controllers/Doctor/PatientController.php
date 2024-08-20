<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('doctor.patients.index', compact('patients'));
    }

    public function show(Patient $patient)
    {
        return view('doctor.patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('doctor.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
        return redirect()->route('doctor.patients.show', $patient);
    }

    public function appointments(Patient $patient)
    {
        $appointments = $patient->appointments()->get();
        return view('doctor.patients.appointments', compact('patient', 'appointments'));
    }
}

