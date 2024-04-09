<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
use App\Models\State;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateMedicalRecord extends Component
{
    public $periodic_habits = [
        1 => 'Nunca',
        2 => 'Socialmente',
        3 => 'Regularmente',
        4 => 'A Diario',

    ];

    public $gender_list = [
        1 => 'Femenino',
        2 => 'Masculino',
    ];

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


    public function createMedicalRecord()
    {
        // Validamos los datos del formulario
        $datosValidados = $this->validate();
        $datosValidados['imc'] = $this->imc;

        // Separamos los datos que van a ser procesados por los modelos
        // Datos que van a medical record 
        $datosValidados['user_id']   = auth()->user()->id;

        $doneMedicalRecord = MedicalRecord::create($datosValidados);

        if($doneMedicalRecord)
        {
            $datosValidados['medical_record_id']     = $doneMedicalRecord->id;
            MedicalAppointment::create($datosValidados);
            session()->flash('message', 'El expediente se creó correctamente!');
        } else {
            session()->flash('message', 'El expediente no pudo crearse');
        }


        return redirect()->route('expedientes');
    }

    // Render view
    public function render()
    {

        $states = State::all();

        return view('livewire.create-medical-record', ['states' => $states]);
    }

    public function changeAgeEvent($value)
    {
        $from_date = Carbon::parse(date('Y-m-d', strtotime($value)));
        $current_date = Carbon::now();
        $this->age_eval = floor($from_date->diffInYears($current_date));
    }

    public function changeGlucoseEvent($value)
    {
        $this->glucose_eval = $value <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';
        $this->glucose_eval_color = $value;

        if ($value === '') {
            $this->glucose_eval = '';
            $this->glucose_eval_color = '';
        }
    }

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

    public function changeSizeEvent($value)
    {
        $this->size = $value;

        if ($value === '' || $this->weight === '') {
            $this->imc = '';
            $this->eval_imc = '';
            $this->eval_imc_color = '';
        } else {
            $this->imc = $this->weight / ($this->size ** 2);
        }

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
