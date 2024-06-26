<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalAppointment extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $fillable = [
        'weight',
        'size',
        'glucose',
        'imc',
        'tmb',
        'exercised',
        'tmt',
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

    public function expediente(): BelongsTo
    {
        return $this->belongsTo(MedicalRecord::class, 'medical_record_id');
    }
}
