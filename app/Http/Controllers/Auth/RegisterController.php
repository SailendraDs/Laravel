<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;  // <-- Make sure this is included

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $role = 'patient'; // Default role
        if (request()->is('doctor/register')) {
            $role = 'doctor';
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $role,
        ]);

        if ($role === 'doctor') {
            $user->doctor()->create([
                'user_id' => $user->id, 
                'name' => $data['name'],
                'email' => $data['email'],
                // Additional fields if necessary
            ]);
        } else {
            $user->patient()->create([
                'user_id' => $user->id, 
                'name' => $data['name'],
                'email' => $data['email'],
                // Additional fields if necessary
            ]);
        }

        return $user;
    }
}

