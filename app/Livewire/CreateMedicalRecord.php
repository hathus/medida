<?php

namespace App\Livewire;

use App\Models\MedicalRecord;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateMedicalRecord extends Component
{
    public $mexican_states = [
        1 => 'Ciudad de México',
        2 => 'Aguascalientes',
        3 => 'Baja California',
        4 => 'Baja California Sur',
        5 => 'Campeche',
        6 => 'Chiapas',
        7 => 'Chihuahua',
        8 => 'Coahuila de Zaragoza',
        9 => 'Colima',
        10 => 'Durango',
        11 => 'Guanajuato',
        12 => 'Guerrero',
        13 => 'Hidalgo',
        14 => 'Jalisco',
        15 => 'Estado de México',
        16 => 'Michoacán de Ocampo',
        17 => 'Morelos',
        18 => 'Nayarit',
        19 => 'Nuevo León',
        20 => 'Oaxaca',
        21 => 'Puebla',
        22 => 'Querétaro de Arteaga',
        23 => 'Quintana Roo',
        24 => 'San Luis Potosí',
        25 => 'Sinaloa',
        26 => 'Sonora',
        27 => 'Tabasco',
        28 => 'Tamaulipas',
        29 => 'Tlaxcala',
        30 => 'Veracruz',
        31 => 'Yucatán',
        32 => 'Zacatecas',
    ];

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
    public $state;

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
        $datos_validados = $this->validate();
        $datos_validados['imc'] = $this->imc;
        $datos_validados['user_id'] = auth()->user()->id;

        MedicalRecord::create($datos_validados);

        session()->flash('message', 'El expediente se creó correctamente!');

        return redirect()->route('expedientes');
    }

    public function render()
    {
        return view('livewire.create-medical-record');
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
            $this->eval_imc_color = "!text-blue-700";
        } elseif ($this->imc >= 18.5 && $this->imc <= 24.9) {
            $this->eval_imc_color = "";
            $this->eval_imc = 'Normal';
            $this->eval_imc_color = "!text-lime-700";
        } elseif ($this->imc >= 25 && $this->imc <= 29.9) {
            $this->eval_imc_color = "";
            $this->eval_imc = 'Sobrepeso';
            $this->eval_imc_color = "!text-orange-700";
        } else {
            $this->eval_imc_color = "";
            $this->eval_imc = 'Obesidad';
            $this->eval_imc_color = "!text-red-700";
        }
    }
}
