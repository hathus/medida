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

    public $blue;
    public $lime;
    public $yellow;
    public $pink;
    public $orange;
    public $red;

    // función para evaluar la IMC
    public function evalIMC($imc)
    {
        if ($imc < 18.5) {
            $imc_eval = 'Bajo Peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $imc_eval = 'Peso Normal';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $imc_eval = 'Sobrepeso';
        } else {
            $imc_eval = 'Obesidad';
        }

        return $imc_eval;
    }

    // Evalúa los niveles de la presión arterial
    public function evalBloodPress($value)
    {
        $this->blue   = false;
        $this->lime   = false;
        $this->yellow = false;
        $this->pink   = false;
        $this->orange = false;
        $this->red    = false;

        $values = explode('/', $value);

        if ($values[0] < 80 || $values[1] < 60) {
            $eval_blood_press = 'Hipotensión';
            $this->blue   = true;
        } elseif ($values[0] <= 120 && $values[1] <= 80) {
            $eval_blood_press = 'Normal';
            $this->lime = true;
        } elseif ($values[0] <= 129 && $values[1] <= 80) {
            $eval_blood_press = 'Elevada';
            $this->yellow = true;
        } elseif ($values[0] <= 139 && $values[1] <= 89) {
            $eval_blood_press = 'Hipertensión Nivel 1';
            $this->pink   = true;
        } elseif ($values[0] <= 179 && $values[1] <= 120) {
            $eval_blood_press = 'Hipertensión Nivel 2';
            $this->orange = true;
        } else {
            $eval_blood_press = 'Crisis Hipertensiva';
            $this->red    = true;
        }

        return $eval_blood_press;
    }

    public function index($id)
    {
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
    public function show($id)
    {
        $medicalAppointment = MedicalAppointment::findOrFail($id);
        $medicalAppointment['eval_gender'] = $this->gender_list[$medicalAppointment->expediente->gender];
        $medicalAppointment['eval_imc'] = $this->evalIMC($medicalAppointment->imc);
        $medicalAppointment['eval_blood_press'] = $this->evalBloodPress($medicalAppointment->blood_pressure);

        return view('medical_appointments.show', [
            'medApp' => $medicalAppointment,
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
