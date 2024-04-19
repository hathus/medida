<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
use App\Models\State;
use Carbon\Carbon;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditMedicalRecord extends Component
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

    #[Locked]
    public $medicalRecord_id;

    #[Validate('required', message: 'El campo nombre es requerido!')]
    public $name;

    #[Validate('required', message: 'El campo correo electrónico es requerido!')]
    #[Validate('lowercase', message: 'El campo correo electrónico tiene letras mayúsculas')]
    public $email;

    #[Validate('required', message: 'El campo edad es requerido')]
    public $age;

    #[Validate('required', message: 'El campo teléfono es requerido')]
    #[Validate('min:10', message: 'El campo teléfono no tiene los dígitos requeridos')]
    #[Validate('max:10', message: 'El campo teléfono excede los dígitos requeridos')]
    public $phone;

    #[Validate('required', message: 'El campo genero es requerido')]
    public $gender;

    public $age_eval;

    #[Validate('required', message: 'El campo ciudad es requerido')]
    public $city;

    #[Validate('required', message: 'El campo estado es requerido')]
    public $state_id;

    #[Validate('required', message: 'El campo peso es requerido')]
    public $weight = '';

    #[Validate('required', message: 'El campo talla/estatura es requerido')]
    public $size = '';

    #[Validate('required', message: 'El campo glucosa es requerido')]
    public $glucose;

    //#[Validate('required', message: 'El campo es requerido')]
    public $glucose_eval;

    public $glucose_eval_color;

    //#[Validate('required', message: 'El campo es requerido')]
    public $imc;

    //#[Validate('required', message: 'El campo es requerido')]
    public $eval_imc;

    public $eval_imc_color;

    public $tmb;

    #[Validate('required', message: 'El campo ejercicio es requerido')]
    public $exercised;

    public $tmt;

    #[Validate('required', message: 'El campo comida chatarra es requerido')]
    public $fast_food;

    #[Validate('required', message: 'El campo tabaquismo es requerido')]
    public $smoking;

    #[Validate('required', message: 'El campo alcoholismo es requerido')]
    public $alcoholism;

    #[Validate('required', message: 'El campo drogas es requerido')]
    public $drugs;

    public function mount(MedicalRecord $medicalRecord)
    {
        $this->medicalRecord_id = $medicalRecord->id;
        $this->name = $medicalRecord->name;
        $this->email = $medicalRecord->email;
        $this->phone = $medicalRecord->phone;
        $this->gender = $medicalRecord->gender;
        $this->age = Carbon::parse($medicalRecord->age)->format('Y-m-d');
        $this->changeAgeEvent($this->age);
        $this->city = $medicalRecord->city;
        $this->state_id = $medicalRecord->state_id;
        $medApp = MedicalAppointment::where('medical_record_id', $this->medicalRecord_id)->first();
        $this->weight = $medApp->weight;
        $this->size = $medApp->size;
        $this->changeSizeEvent($this->size);
        $this->glucose = $medApp->glucose;
        $this->changeGlucoseEvent($this->glucose);
        $this->tmb = $medApp->tmb;
        $this->exercised = $medApp->exercised;
        $this->tmt = $medApp->tmt;
        $this->calculateTMT();
        $this->fast_food = $medApp->fast_food;
        $this->smoking = $medApp->smoking;
        $this->alcoholism = $medApp->alcoholism;
        $this->drugs = $medApp->drugs;
    }

    public function render()
    {
        $states = State::all();

        return view('livewire.edit-medical-record', [
            'states' => $states,
        ]);
    }

    public function editMedicalRecord()
    {
        $datos_validados = $this->validate();
        $datos_validados['imc'] = $this->imc;
        $datos_validados['tmb'] = $this->tmb;
        $datos_validados['tmt'] = $this->tmt;

        $medicalRecord = MedicalRecord::find($this->medicalRecord_id);
        $medicalRecord->name        = $datos_validados['name'];
        $medicalRecord->email       = $datos_validados['email'];
        $medicalRecord->phone       = $datos_validados['phone'];
        $medicalRecord->gender      = $datos_validados['gender'];
        $medicalRecord->age         = $datos_validados['age'];
        $medicalRecord->city        = $datos_validados['city'];
        $medicalRecord->state_id    = $datos_validados['state_id'];

        $medApp = MedicalAppointment::where('medical_record_id', $this->medicalRecord_id)->first();
        $medApp->weight      = $datos_validados['weight'];
        $medApp->size        = $datos_validados['size'];
        $medApp->imc         = $datos_validados['imc'];
        $medApp->glucose     = $datos_validados['glucose'];
        $medApp->tmb         = $datos_validados['tmb'];
        $medApp->exercised   = $datos_validados['exercised'];
        $medApp->tmt         = $datos_validados['tmt'];
        $medApp->fast_food   = $datos_validados['fast_food'];
        $medApp->smoking     = $datos_validados['smoking'];
        $medApp->alcoholism  = $datos_validados['alcoholism'];
        $medApp->drugs       = $datos_validados['drugs'];

        $this->authorize('update', $medicalRecord);
        //$this->authorize('update', $medApp);

        $medicalRecord->save();
        $medApp->save();

        session()->flash('message', 'El expediente se actualizó correctamente!');

        return redirect()->route('expedientes');
    }

    // evento que cambia el genero
    public function changeGender()
    {
        $this->tmt = '';
        $this->exercised = '';
        $this->calculateTMB();
    }

    // Evento que cambia la edad
    public function changeAgeEvent($value)
    {
        $this->tmt = '';
        $this->exercised = '';

        if ($value === '') {
            $this->age_eval = '';
            $this->age = '';
            $from_date = '';
        } else {
            $from_date = Carbon::parse(date('Y-m-d', strtotime($value)));
            $current_date = Carbon::now();
            $this->age_eval = floor($from_date->diffInYears($current_date));
            $this->calculateTMB();
        }
    }

    // Evento que cambia el peso
    public function changeWeightEvent($value)
    {
        $this->weight = $value;

        $this->tmt = '';
        $this->exercised = '';

        if ($value === '' || $this->size === '') {
            $this->imc = '';
            $this->eval_imc = '';
        } else {
            $this->changeSizeEvent($this->size);
        }
    }

    // Evento que cambia la talla
    public function changeSizeEvent($value)
    {
        $this->size = $value;

        if ($value === '' || $this->weight === '') {
            $this->imc = '';
            $this->eval_imc = '';
            $this->eval_imc_color = '';
        } else {
            $this->imc = $this->weight / ($this->size ** 2);
            $this->calculateTMB();

            if ($this->imc < 18.5) {
                $this->eval_imc_color = "";
                $this->eval_imc = 'Bajo Peso';
            } elseif ($this->imc >= 18.5 && $this->imc <= 24.9) {
                $this->eval_imc_color = "";
                $this->eval_imc = 'Normal';
            } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
                $this->eval_imc_color = "";
                $this->eval_imc = 'Sobrepeso';
            } else {
                $this->eval_imc_color = "";
                $this->eval_imc = 'Obesidad';
            }
        }
    }

    // Evento que cambia la glucosa
    public function changeGlucoseEvent($value)
    {
        $this->glucose_eval = $value <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';
        $this->glucose_eval_color = $value;

        if ($value === '') {
            $this->glucose_eval = '';
            $this->glucose_eval_color = '';
        }
    }

    // Evento que calcula el tmb
    public function calculateTMB()
    {
        /**
         * Para mujeres: TMB = 665.1 + (9.56 x peso, kg) + (1.85 x altura, cm) – (4.68 x edad, años)
         * Para hombres: TMB = 66.47 + (13.75 x peso, kg) + (5.00 x altura, cm) – (6.77 x edad, años)
         */
        if ($this->age === null || $this->weight === '' || $this->size === '' || $this->age_eval === null) {
            $this->tmb = '';
            $this->tmt = '';
        } else {
            if ($this->gender_list[$this->gender] === "Femenino") {
                $this->tmb = (10 * $this->weight) + (6.25 * ($this->size * 100)) - (5 * $this->age_eval) - 161;
            } else {
                $this->tmb = (10 * $this->weight) + (6.25 * ($this->size * 100)) - (5 * $this->age_eval) + 5;
            }
        }
    }

    // Evento que calcula el tmt
    public function calculateTMT()
    {
        /**
         * Mínimo (sedentario) – 1.2
         * Bajo (ejercicio ligero menos de 3 veces a la semana) – 1.375
         * Medio (ejercicio moderado 3-5 veces a la semana) – 1.55
         * Alto nivel (ejercicio intenso al menos 5 veces a la semana) – 1.725
         * Muy alto (ejercicio todos los días más de una vez) – 1.9
         */

        switch ($this->exercised) {
            case "1":
                $this->tmt = $this->tmb * 1.2;
                break;
            case "2":
                $this->tmt = $this->tmb * 1.375;
                break;
            case "3":
                $this->tmt = $this->tmb * 1.55;
                break;
            case "4":
                $this->tmt = $this->tmb * 1.725;
                break;
            case "5":
                $this->tmt = $this->tmb * 1.9;
                break;
            default:
                $this->tmt = 0;
        }
    }

    // Evento que cambia el ejercicio
    public function changeExercisedEvent()
    {
        if ($this->age === null || $this->weight === '' || $this->size === '' || $this->age_eval === null) {
            $this->tmb = '';
            $this->tmt = '';
        } else {
            $this->calculateTMT();
        }
    }
}
