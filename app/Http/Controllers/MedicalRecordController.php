<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\State;
use Illuminate\Http\Request;
use App\Models\MedicalRecord;

class MedicalRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medical_records.index');
    }

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
        $medicalRecord['gender_eval'] = $this->gender_list[$medicalRecord->gender];
        $medicalRecord['state_eval'] = $state->name;
        $medicalRecord['age_eval'] = $this->changeAgeEvent($medicalRecord->age);
        $medicalRecord['exercised_eval'] = $this->periodic_habits[$medicalRecord->exercised];
        $medicalRecord['fast_food_eval'] = $this->periodic_habits[$medicalRecord->fast_food];
        $medicalRecord['smoking_eval'] = $this->periodic_habits[$medicalRecord->smoking];
        $medicalRecord['alcoholism_eval'] = $this->periodic_habits[$medicalRecord->alcoholism];
        $medicalRecord['drugs_eval'] = $this->periodic_habits[$medicalRecord->drugs];
        $medicalRecord['imc_eval'] = $this->evalIMC($medicalRecord->imc);
        $medicalRecord['glucose_eval'] = $medicalRecord->glucose <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';


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
