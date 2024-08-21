<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;


    protected $fillable = ['patient_id', 'date', 'notes', 'report_link'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
