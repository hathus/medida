<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
use Livewire\Component;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;


class CreateMedicalAppointment extends Component
{

    public $periodic_habits = [
        1 => 'Nunca',
        2 => 'Socialmente',
        3 => 'Regularmente',
        4 => 'A Diario',

    ];

    public $physical_activity = [
        1 => 'Poca o ninguna actividad',
        2 => 'Actividad ligera',
        3 => 'Actividad moderada',
        4 => 'Actividad intensa',
    ];

    #[Locked]
    public $medical_record;

    #[Locked]
    public $medical_record_id;

    #[Validate('required', message: 'El campo peso es requerido')]
    public $weight = '';

    #[Validate('required', message: 'El campo talla/estatura es requerido')]
    public $size = '';

    //#[Validate('required', message: 'El campo es requerido')]
    public $imc;

    //#[Validate('required', message: 'El campo es requerido')]
    public $eval_imc;

    #[Validate('required', message: 'El campo glucosa es requerido')]
    public $glucose;

    //#[Validate('required', message: 'El campo es requerido')]
    public $glucose_eval;

    public $glucose_eval_color;

    #[Validate('required', message: 'El campo ejercicio es requerido')]
    public $exercised;

    #[Validate('required', message: 'El campo comida chatarra es requerido')]
    public $fast_food;

    #[Validate('required', message: 'El campo tabaquismo es requerido')]
    public $smoking;

    #[Validate('required', message: 'El campo alcoholismo es requerido')]
    public $alcoholism;

    #[Validate('required', message: 'El campo drogas es requerido')]
    public $drugs;

    #[Validate('required', message: 'El campo temperatura corporal es requerido')]
    public $body_temp;

    // Evaluación de temperatura
    public $eval_body_temp;

    #[Validate('required', message: 'El campo presión arterial es requerido')]
    public $blood_pressure;

    //Evaluación de presión arterial
    public $eval_blood_press;

    #[Validate('required', message: 'El campo alergias es requerido')]
    public $allergies;

    #[Validate('required', message: "El campo diagnostico es requerido")]
    public $diagnostic;

    #[Validate('required', message: "El campo tratamiento es requerido")]
    public $treatment;

    public $blue   = false;
    public $lime   = false;
    public $yellow = false;
    public $pink   = false;
    public $orange = false;
    public $red    = false;

    public function mount($id)
    {
        $this->medical_record = MedicalRecord::findOrFail($id);
        $this->medical_record_id = $this->medical_record->id;
    }

    public function render()
    {
        return view('livewire.create-medical-appointment');
    }

    public function createMedicalAppointment()
    {
        $datos_validados = $this->validate();;
        $datos_validados['imc'] = $this->imc;
        $datos_validados['medical_record_id'] = $this->medical_record_id;

        MedicalAppointment::create($datos_validados);
        
        session()->flash('message', 'La consulta fue creada correctamente');
        
        return redirect()->route('consultas', $this->medical_record_id);
        
    }

    // Evento que cambia con el ingreso del peso
    public function changeWeightEvent($value)
    {
        $this->weight = $value;

        if ($value === '' || $this->size === '') {
            $this->imc = '';
            $this->eval_imc = '';
        } else {
            $this->changeSizeEvent($this->size);
        }
    }

    // Evento que cambia con el ingreso del valor de la glucosa
    public function changeGlucoseEvent($value)
    {
        $this->glucose_eval = $value <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';
        $this->glucose_eval_color = $value;

        if ($value === '') {
            $this->glucose_eval = '';
            $this->glucose_eval_color = '';
        }
    }

    // Evento que cambia con la entrada de la talla o altura
    public function changeSizeEvent($value)
    {
        $this->size = $value;

        if ($value === '' || $this->weight === '') {
            $this->imc = '';
            $this->eval_imc = '';
        } else {
            $this->imc = $this->weight / ($this->size ** 2);
        }

        if ($this->imc < 18.5) {
            $this->eval_imc = 'Bajo Peso';
        } elseif ($this->imc >= 18.5 && $this->imc <= 24.9) {
            $this->eval_imc = 'Normal';
        } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
            $this->eval_imc = 'Sobrepeso';
        } else {
            $this->eval_imc = 'Obesidad';
        }
    }

    // Evento que cambia con la entrada del valor de la temperatura
    public function changeBodyTempEvent($value)
    {
        if ($value === '' || $this->body_temp === '') {
            $this->eval_body_temp = '';
        }

        if ($this->body_temp < 35) {
            $this->eval_body_temp = 'Baja';
        } elseif ($this->body_temp >= 35 && $this->body_temp <= 37.5) {
            $this->eval_body_temp = 'Normal';
        } elseif ($this->body_temp >= 37.6 && $this->body_temp <= 38) {
            $this->eval_body_temp = 'Febrícula';
        } elseif ($this->body_temp >= 38.1 && $this->body_temp <= 38.5) {
            $this->eval_body_temp = 'Leve';
        } elseif ($this->body_temp >= 38.6 && $this->body_temp <= 39) {
            $this->eval_body_temp = 'Moderada';
        } else {
            $this->eval_body_temp = 'Alta';
        }
    }

    // Evalúa los niveles de la presión arterial
    public function changeBloodPressureEvent($value)
    {
        if ($value === '' || $this->blood_pressure === '') {
            $this->eval_blood_press = '';
        }

        $this->blue   = false;
        $this->lime   = false;
        $this->yellow = false;
        $this->pink   = false;
        $this->orange = false;
        $this->red    = false;

        $values = explode('/', $value);

        if ($values[0] < 80 || $values[1] < 60) {
            $this->eval_blood_press = 'Hipotensión';
            $this->blue   = true;
        } elseif ($values[0] <= 120 && $values[1] <= 80) {
            $this->eval_blood_press = 'Normal';
            $this->lime = true;
        } elseif ($values[0] <= 129 && $values[1] <= 80) {
            $this->eval_blood_press = 'Elevada';
            $this->yellow = true;
        } elseif ($values[0] <= 139 && $values[1] <= 89) {
            $this->eval_blood_press = 'Hipertensión Nivel 1';
            $this->pink   = true;
        } elseif ($values[0] <= 179 && $values[1] <= 120) {
            $this->eval_blood_press = 'Hipertensión Nivel 2';
            $this->orange = true;
        } else {
            $this->eval_blood_press = 'Crisis Hipertensiva';
            $this->red    = true;
        }
    }
}
