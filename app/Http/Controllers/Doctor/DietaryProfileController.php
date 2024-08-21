<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DietaryProfile;
use App\Models\Patient;
use Illuminate\Http\Request;

class DietaryProfileController extends Controller
{
    public function index()
    {
        $profiles = DietaryProfile::all();
        return view('doctor.dietary_profiles.index', compact('profiles'));
    }

    public function create(Patient $patient)
    {
        return view('doctor.dietary_profiles.create', compact('patient'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'schedule' => 'required|array',
            'schedule.*.time' => 'required|string',
            'schedule.*.meal' => 'required|string',
            'schedule.*.foods' => 'required|array',
            'schedule.*.foods.*.name' => 'required|string',
            'schedule.*.foods.*.calories' => 'required|numeric',
            'schedule.*.foods.*.nutrition' => 'required|string',
        ]);

        DietaryProfile::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => auth()->id(),
            'schedule' => $request->schedule,
        ]);

        return redirect()->route('doctor.dietary-profiles.index')->with('status', 'Dietary profile created successfully!');
    }

    public function show(DietaryProfile $profile)
    {
        return view('doctor.dietary_profiles.show', compact('profile'));
    }
}


