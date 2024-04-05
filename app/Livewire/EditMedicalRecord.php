<?php

namespace App\Livewire;

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
        2 => 'Socialmente',
        3 => 'Regularmente',
        4 => 'A Diario',

    ];

    public $gender_list = [
        1 => 'Femenino',
        2 => 'Masculino',
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
        $this->weight = $medicalRecord->weight;
        $this->size = $medicalRecord->size;
        $this->changeSizeEvent($this->size);
        $this->glucose = $medicalRecord->glucose;
        $this->changeGlucoseEvent($this->glucose);
        $this->exercised = $medicalRecord->exercised;
        $this->fast_food = $medicalRecord->fast_food;
        $this->smoking = $medicalRecord->smoking;
        $this->alcoholism = $medicalRecord->alcoholism;
        $this->drugs = $medicalRecord->drugs;
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

        $medicalRecord = MedicalRecord::find($this->medicalRecord_id);
        $medicalRecord->name        = $datos_validados['name'];
        $medicalRecord->email       = $datos_validados['email'];
        $medicalRecord->phone       = $datos_validados['phone'];
        $medicalRecord->gender      = $datos_validados['gender'];
        $medicalRecord->age         = $datos_validados['age'];
        $medicalRecord->city        = $datos_validados['city'];
        $medicalRecord->state_id    = $datos_validados['state_id'];
        $medicalRecord->weight      = $datos_validados['weight'];
        $medicalRecord->size        = $datos_validados['size'];
        $medicalRecord->imc         = $datos_validados['imc'];
        $medicalRecord->glucose     = $datos_validados['glucose'];
        $medicalRecord->exercised   = $datos_validados['exercised'];
        $medicalRecord->fast_food   = $datos_validados['fast_food'];
        $medicalRecord->smoking     = $datos_validados['smoking'];
        $medicalRecord->alcoholism  = $datos_validados['alcoholism'];
        $medicalRecord->drugs       = $datos_validados['drugs'];

        $this->authorize('update', $medicalRecord);

        $medicalRecord->save();

        session()->flash('message', 'El expediente se actualizó correctamente!');

        return redirect()->route('expedientes');
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
