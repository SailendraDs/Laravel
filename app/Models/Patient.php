<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'address', 'dob', 'gender'];

    public function user()
{
    return $this->belongsTo(User::class);
}

    
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
    

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function dietaryProfiles()
    {
        return $this->hasOne(DietaryProfile::class);
    }
}

