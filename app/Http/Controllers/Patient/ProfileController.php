<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('patient.dashboard');
    }

    public function edit()
    {
        return view('patient.profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // other validation rules
        ]);

        $user = auth()->user();
        $user->update($request->all());

        return redirect()->route('patient.profile.edit')->with('status', 'Profile updated!');
    }
}
