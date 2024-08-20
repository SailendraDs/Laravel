<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index');
    }

    public function show($type)
    {
        switch ($type) {
            case 'users':
                $data = User::all();
                break;
            case 'patients':
                $data = Patient::all();
                break;
            case 'appointments':
                $data = Appointment::all();
                break;
            // Add more cases for different types of reports
            default:
                $data = [];
        }

        return view('admin.reports.show', compact('type', 'data'));
    }
}
