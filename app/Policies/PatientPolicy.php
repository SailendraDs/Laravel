<?php

namespace App\Policies;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any patients.
     */
    public function viewAny(User $user)
    {
        return $user->role === 'doctor' || $user->role === 'admin';
    }

    /**
     * Determine whether the user can view the patient.
     */
    public function view(User $user, Patient $patient)
    {
        return $user->role === 'doctor' || $user->role === 'admin';
    }

    /**
     * Determine whether the user can create patients.
     */
    public function create(User $user)
    {
        return $user->role === 'doctor' || $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the patient.
     */
    public function update(User $user, Patient $patient)
    {
        return $user->role === 'doctor' || $user->role === 'admin';
    }

    /**
     * Determine whether the user can delete the patient.
     */
    public function delete(User $user, Patient $patient)
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can restore the patient.
     */
    public function restore(User $user, Patient $patient)
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the patient.
     */
    public function forceDelete(User $user, Patient $patient)
    {
        return $user->role === 'admin';
    }
}
