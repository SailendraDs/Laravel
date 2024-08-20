<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('patient.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('patient.dashboard');
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegisterForm()
    {
        return view('patient.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'patient',
        ]);

        // Generate OTP and send email
        $otp = rand(100000, 999999);
        $user->otp = $otp;
        $user->save();

        Mail::to($user->email)->send(new OtpMail($otp));

        return view('patient.auth.verify-otp')->with('user', $user);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->otp == $request->otp) {
            $user->email_verified_at = now();
            $user->otp = null;
            $user->save();

            Auth::login($user);
            return redirect()->route('patient.dashboard');
        }

        return back()->withErrors(['otp' => 'Invalid OTP']);
    }

    public function dashboard()
    {
        return view('patient.dashboard');
    }
}
