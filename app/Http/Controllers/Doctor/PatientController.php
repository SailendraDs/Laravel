<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Patient::class);
        $patients = Patient::all();
        return view('doctor.patients.index', compact('patients'));
    }

    public function show(Patient $patient)
    {
        $this->authorize('view', $patient);
        return view('doctor.patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        $this->authorize('update', $patient);
        return view('profile.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $this->authorize('update', $patient);
        $validated = $this->validatePatient($request);  // Reuse validation logic
        $patient->update($validated);

        return redirect()->route('doctor.patients.show', $patient)->with('status', 'Patient profile updated successfully!');
    }

    public function appointments(Patient $patient)
    {
        $this->authorize('view', $patient);
        $appointments = $patient->appointments()->get();
        return view('doctor.patients.appointments', compact('patient', 'appointments'));
    }

    protected function validatePatient(Request $request)
{
    return $request->validate([
        'name' => 'required|string|max:255',
        'dob' => 'required|date',
        'gender' => 'required|string',
        'email' => 'required|string|email|max:255|unique:users,email,' . $request->route('patient')->id,
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'emergency_contact_name' => 'required|string|max:255',
        'emergency_contact_relationship' => 'required|string|max:255',
        'emergency_contact_phone' => 'required|string|max:15',
        'marital_status' => 'required|string|max:255',
        'occupation' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'insurance_provider' => 'required|string|max:255',
        'insurance_policy_number' => 'required|string|max:255',
        'insurance_coverage_details' => 'nullable|string',
        'blood_group' => 'required|string|max:3',
        'height' => 'required|numeric',
        'weight' => 'required|numeric',
        'bmi' => 'required|numeric',
        'pulse_rate' => 'required|numeric',
        'blood_pressure_systolic' => 'required|numeric',
        'blood_pressure_diastolic' => 'required|numeric',
        'diabetic_status' => 'required|boolean',
        'fear_of_insulin' => 'nullable|boolean',
        'fear_of_medicines' => 'nullable|boolean',
        'other_phobias' => 'nullable|string|max:255',
        'known_allergies_medications' => 'nullable|string|max:255',
        'known_allergies_foods' => 'nullable|string|max:255',
        'known_allergies_environmental' => 'nullable|string|max:255',
        'chronic_conditions' => 'nullable|array',
        'blood_sugar_levels' => 'nullable|array',
        'current_conditions' => 'nullable|array',
        'current_medications' => 'nullable|array',
        'previous_diagnoses' => 'nullable|array',
        'family_medical_history' => 'nullable|array',
        'surgical_history' => 'nullable|array',
        'treatment_history' => 'nullable|array',
        'lab_reports' => 'nullable|array',
        'radiology_reports' => 'nullable|array',
        'specialist_reports' => 'nullable|array',
        'medication_history' => 'nullable|array',
        'health_hobbies' => 'nullable|array',
        'exercise_fitness_routine' => 'nullable|array',
        'dietary_preferences' => 'nullable|array',
        'food_hobbies' => 'nullable|array',
        'food_allergies' => 'nullable|array',
        'health_goals' => 'nullable|array',
    ]);
}

}

