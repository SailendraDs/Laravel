<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\Patient;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index(Request $request)
    {
        $prescriptions = Prescription::query();

        if ($request->has('patient_name')) {
            $prescriptions->whereHas('patient', function($query) use ($request) {
                $query->where('name', 'like', '%'.$request->patient_name.'%');
            });
        }

        return view('doctor.prescriptions.index', ['prescriptions' => $prescriptions->get()]);
    }

    public function create(Patient $patient)
    {
        return view('doctor.prescriptions.create', ['patient' => $patient]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'medicines' => 'required|array',
            'medicines.*.name' => 'required|string',
            'medicines.*.dosage' => 'required|string',
            'medicines.*.frequency' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        Prescription::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => auth()->id(),
            'medicines' => json_encode($request->medicines),
            'notes' => $request->notes,
        ]);

        foreach ($request->medicines as $medicineData) {
            $medicine = Medicine::firstOrCreate([
                'name' => $medicineData['name'],
                'dosage' => $medicineData['dosage']
            ]);
    
            $prescription->medicines()->attach($medicine->id);
        }

        return redirect()->route('doctor.prescriptions.index')->with('status', 'Prescription created successfully!');
    }

    public function show(Prescription $prescription)
    {
        return view('doctor.prescriptions.show', compact('prescription'));
    }
}
