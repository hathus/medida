<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'size',
        'glucose',
        'imc',
        'exercised',
        'fast_food',
        'smoking',
        'alcoholism',
        'drugs',
        'body_temp',
        'blood_pressure',
        'allergies',
        'diagnostic',
        'treatment',
        'medical_record_id',
    ];

    public function expediente()
    {
        return $this->belongsTo(MedicalRecord::class);
    }
}
