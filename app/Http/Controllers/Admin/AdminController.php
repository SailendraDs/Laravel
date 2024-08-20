<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function managePatients()
    {
        $patients = Patient::all();
        return view('admin.patients.index', compact('patients'));
    }

    public function manageDoctors()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function manageDieticians()
    {
        $dieticians = User::where('role', 'dietician')->get();
        return view('admin.dieticians.index', compact('dieticians'));
    }

    // Additional management methods
}
