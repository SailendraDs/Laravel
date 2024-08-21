<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaryProfile extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'schedule'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function getScheduleAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setScheduleAttribute($value)
    {
        $this->attributes['schedule'] = json_encode($value);
    }
}
