<?php

namespace App\Http\Controllers;

use App\Models\MedicalAppointment;
use Illuminate\Http\Request;

class MedicalAppointmentController extends Controller
{
    public $gender_list = [
        1 => 'Femenino',
        2 => 'Masculino',
    ];

    public $periodic_habits = [
        1 => 'Nunca',
        2 => 'Socialmente',
        3 => 'Regularmente',
        4 => 'A Diario',

    ];

    public function index($id)
    {
        return view('medical_appointments.index', [
            'id' => $id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicalAppointment $medicalAppointment)
    {
        return view('medical_appointments.show', [
            'medicalAppointment' => $medicalAppointment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicalAppointment $medicalAppointment)
    {

    }
}
