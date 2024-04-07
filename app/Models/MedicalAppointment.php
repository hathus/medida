<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body_temp',
        'allergies',
        'diagnostic',
        'treatment',
        'medical_record_id',
        'weight',
        'size',
        'glucose',
        'imc',
        'exercised',
        'fast_food',
        'smoking',
        'alcoholism',
        'drugs',
    ];
}
