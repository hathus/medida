<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuscleMass extends Model
{
    use HasFactory;

    // Valores para el calculo de la masa corporal
    protected $fillable = [
        'age',
        'weight',
        'size',
        'exercised',
        'glucose',
    ];
}
