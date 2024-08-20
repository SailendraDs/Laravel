<?php

namespace App\Http\Controllers\Dietician;

use App\Http\Controllers\Controller;
use App\Models\DietaryProfile;
use App\Models\Patient;
use Illuminate\Http\Request;

class DietaryProfileController extends Controller
{
    public function index()
    {
        $profiles = DietaryProfile::all();
        return view('dietician.dietary_profiles.index', compact('profiles'));
    }

    public function create(Patient $patient)
    {
        return view('dietician.dietary_profiles.create', compact('patient'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'schedule' => 'required|array',
            'schedule.*.time' => 'required|string',
            'schedule.*.meal' => 'required|string',
        ]);

        DietaryProfile::create([
            'patient_id' => $request->patient_id,
            'schedule' => json_encode($request->schedule),
        ]);

        return redirect()->route('dietician.dietary-profiles.index');
    }

    public function show(DietaryProfile $profile)
    {
        return view('dietician.dietary_profiles.show', compact('profile'));
    }
}

