<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\State;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\MedicalAppointment;

class MedicalRecordController extends Controller
{
    public $periodic_habits = [
        1 => 'Nunca',
        2 => 'Esporádicamente',
        3 => 'Socialmente',
        4 => 'Regularmente',
        5 => 'A Diario',
    ];

    public $gender_list = [
        1 => 'Femenino',
        2 => 'Masculino',
    ];

    public $physical_activity = [
        1 => 'Mínimo (sedentario)',
        2 => 'Bajo (ejercicio ligero menos de 3 veces a la semana)',
        3 => 'Medio (ejercicio moderado 3-5 veces a la semana)',
        4 => 'Alto nivel (ejercicio intenso al menos 5 veces a la semana)',
        5 => 'Muy alto (ejercicio todos los días más de una vez)',
    ];


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medical_records.index');
    }

    public function changeAgeEvent($age)
    {
        $from_date = Carbon::parse(date('Y-m-d', strtotime($age)));
        $current_date = Carbon::now();
        $age_eval = floor($from_date->diffInYears($current_date));

        return $age_eval;
    }

    public function evalIMC($imc)
    {
        if ($imc < 18.5) {
            $imc_eval = 'Bajo Peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $imc_eval = 'Normal';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $imc_eval = 'Sobrepeso';
        } else {
            $imc_eval = 'Obesidad';
        }

        return $imc_eval;
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicalRecord $medicalRecord)
    {

        $state = State::find($medicalRecord->state_id);
        $medicalRecord['state_eval'] = $state->name;
        $medicalRecord['gender_eval'] = $this->gender_list[$medicalRecord->gender];
        $medicalRecord['age_eval'] = $this->changeAgeEvent($medicalRecord->age);
        
        $id = $medicalRecord->id;
        $medApp = MedicalAppointment::where('medical_record_id', $id)->latest()->first();
        $medicalRecord['weight'] = $medApp->weight;
        $medicalRecord['size'] = $medApp->size;
        $medicalRecord['imc'] = $medApp->imc;
        $medicalRecord['tmb'] = $medApp->tmb;
        $medicalRecord['tmt'] = $medApp->tmt;
        $medicalRecord['glucose'] = $medApp->glucose;
        $medicalRecord['exercised_eval'] = $this->physical_activity[$medApp->exercised];
        $medicalRecord['fast_food_eval'] = $this->periodic_habits[$medApp->fast_food];
        $medicalRecord['smoking_eval'] = $this->periodic_habits[$medApp->smoking];
        $medicalRecord['alcoholism_eval'] = $this->periodic_habits[$medApp->alcoholism];
        $medicalRecord['drugs_eval'] = $this->periodic_habits[$medApp->drugs];
        $medicalRecord['imc_eval'] = $this->evalIMC($medApp->imc);
        $medicalRecord['glucose_eval'] = $medApp->glucose <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';


        return view('medical_records.show', [
            'medicalRecord' => $medicalRecord,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicalRecord $medicalRecord)
    {
        return view('medical_records.edit', [
            'medicalRecord' => $medicalRecord,
        ]);
    }

}
