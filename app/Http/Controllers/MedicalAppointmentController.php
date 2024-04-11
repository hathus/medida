<?php

namespace App\Http\Controllers;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
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
        // TODO Si hay una consulta creada que corresponda al mismo día deshabilitar el botón de nueva consulta
        $medical_record = MedicalRecord::findOrFail($id);

        return view('medical_appointments.index', [
            'id' => $id,
            'name' => $medical_record->name,
            'consultas' => $medical_record->consultas,
        ]);
    }

    public function create($id)
    {
        $medical_record = MedicalRecord::findOrFail($id);

        return view('medical_appointments.create', [
            'id' => $id,
            'name' => $medical_record->name,
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
    public function edit($id)
    {
        $medApp = MedicalAppointment::findOrFail($id);
        $medicalRecord = MedicalRecord::where('id', $medApp->medical_record_id)->first();
        
        return view('medical_appointments.edit', [
            'name' => $medicalRecord->name,
            'fecha' => $medApp->created_at,
            'id' => $medApp->id,
        ]);
    }
}
