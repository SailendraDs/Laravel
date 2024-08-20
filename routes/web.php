<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\AuthController as DoctorAuth;
use App\Http\Controllers\Doctor\PatientController;
use App\Http\Controllers\Doctor\PrescriptionController;
use App\Http\Controllers\Dietician\DietaryProfileController;
use App\Http\Controllers\Dietician\AuthController as DieticianAuth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController as AdminAuth;
use App\Http\Controllers\Patient\AuthController as PatientAuth;
use App\Http\Controllers\Patient\ProfileController as PatientProfile;
use App\Http\Controllers\Doctor\MedicineController;
use App\Http\Controllers\Admin\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PatientProfile::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [PatientProfile::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [PatientProfile::class, 'update'])->name('profile.update');
});

Route::prefix('doctor')->name('doctor.')->group(function() {
    Route::get('/login', [DoctorAuth::class, 'showLoginForm'])->name('login');
    Route::post('/login', [DoctorAuth::class, 'login']);
    Route::get('/register', [DoctorAuth::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [DoctorAuth::class, 'register']);
    Route::post('/verify-otp', [DoctorAuth::class, 'verifyOtp'])->name('verify-otp');

    Route::middleware('doctor')->group(function() {
        Route::get('/dashboard', [DoctorAuth::class, 'dashboard'])->name('dashboard');
        Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');
        Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
        Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
        Route::post('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
        Route::get('/patients/{patient}/appointments', [PatientController::class, 'appointments'])->name('patients.appointments');
        Route::get('/prescriptions', [PrescriptionController::class, 'index'])->name('prescriptions.index');
        Route::get('/prescriptions/create/{patient}', [PrescriptionController::class, 'create'])->name('prescriptions.create');
        Route::post('/prescriptions', [PrescriptionController::class, 'store'])->name('prescriptions.store');
        Route::get('/prescriptions/{prescription}', [PrescriptionController::class, 'show'])->name('prescriptions.show');
        Route::get('/medicines', [MedicineController::class, 'index'])->name('medicines.index');
        Route::get('/medicines/create', [MedicineController::class, 'create'])->name('medicines.create');
        Route::post('/medicines', [MedicineController::class, 'store'])->name('medicines.store');
        Route::get('/medicines/{medicine}/edit', [MedicineController::class, 'edit'])->name('medicines.edit');
        Route::put('/medicines/{medicine}', [MedicineController::class, 'update'])->name('medicines.update');
        Route::delete('/medicines/{medicine}', [MedicineController::class, 'destroy'])->name('medicines.destroy');
    });
});

Route::prefix('dietician')->name('dietician.')->group(function() {
    Route::get('/login', [DieticianAuth::class, 'showLoginForm'])->name('login');
    Route::post('/login', [DieticianAuth::class, 'login']);
    Route::get('/register', [DieticianAuth::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [DieticianAuth::class, 'register']);
    Route::post('/verify-otp', [DieticianAuth::class, 'verifyOtp'])->name('verify-otp');

    Route::middleware('dietician')->group(function() {
        Route::get('/dashboard', [DieticianAuth::class, 'dashboard'])->name('dashboard');
        Route::get('/dietary-profiles', [DietaryProfileController::class, 'index'])->name('dietary-profiles.index');
        Route::get('/dietary-profiles/create/{patient}', [DietaryProfileController::class, 'create'])->name('dietary-profiles.create');
        Route::post('/dietary-profiles', [DietaryProfileController::class, 'store'])->name('dietary-profiles.store');
        Route::get('/dietary-profiles/{profile}', [DietaryProfileController::class, 'show'])->name('dietary-profiles.show');
    });
});


Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', [AdminAuth::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuth::class, 'login']);
    Route::get('/password/reset', [AdminAuth::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [AdminAuth::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset/{token}', [AdminAuth::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [AdminAuth::class, 'reset'])->name('password.update');

    Route::middleware('admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/users', [AdminController::class, 'manageUsers'])->name('users');
        Route::get('/patients', [AdminController::class, 'managePatients'])->name('patients');
        Route::get('/doctors', [AdminController::class, 'manageDoctors'])->name('doctors');
        Route::get('/dieticians', [AdminController::class, 'manageDieticians'])->name('dieticians');
        Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
        Route::get('/reports/{type}', [ReportController::class, 'show'])->name('reports.show');
    // Additional routes as needed
    });
});