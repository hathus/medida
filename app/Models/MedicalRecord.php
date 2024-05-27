<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $casts = [
        'age' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'date',
    ];

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

    public function consultas(): HasMany
    {
        return $this->hasMany(MedicalAppointment::class);
    }
}
