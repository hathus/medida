<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MedicalRecord extends Model
{
    use HasFactory;

    protected $casts = ['age' => 'date'];

    // Valores para el registro medico
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'age',
        'city',
        'state_id',
        'user_id',
    ];

    public function consultas()
    {
        return $this->hasMany(MedicalAppointment::class);
    }
}
