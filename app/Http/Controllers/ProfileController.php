<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request, Patient $patient): View
    {
        // Ensure the authenticated user is editing their own profile
        if ($request->user()->id !== $patient->user_id) {
            abort(403, 'Unauthorized action.');
        }
    
        return view('profile.edit', [
            'user' => $request->user(),
            'patient' => $patient,
        ]);
    }    

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users,email,' . $patient->id,
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

        $patient->update($validated);

        if ($request->hasFile('lab_reports')) {
            foreach ($request->file('lab_reports') as $file) {
                $path = $file->store('lab_reports');
                $patient->lab_reports = array_merge($patient->lab_reports ?? [], [['file_path' => $path, 'notes' => $request->input('lab_report_notes')]]);
            }
        }

        if ($request->hasFile('radiology_reports')) {
            foreach ($request->file('radiology_reports') as $file) {
                $path = $file->store('radiology_reports');
                $patient->radiology_reports = array_merge($patient->radiology_reports ?? [], [['file_path' => $path, 'notes' => $request->input('radiology_report_notes')]]);
            }
        }

        if ($request->hasFile('specialist_reports')) {
            foreach ($request->file('specialist_reports') as $file) {
                $path = $file->store('specialist_reports');
                $patient->specialist_reports = array_merge($patient->specialist_reports ?? [], [['file_path' => $path, 'notes' => $request->input('specialist_report_notes')]]);
            }
        }

        $patient->save();

        return redirect()->route('patients.show', $patient->id)->with('status', 'Patient profile updated successfully!');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
