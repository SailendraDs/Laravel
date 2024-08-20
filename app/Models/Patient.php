<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'dob'];

    public function records()
    {
        return $this->hasMany(PatientRecord::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
