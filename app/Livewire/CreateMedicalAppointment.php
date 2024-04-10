<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
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

    #[Locked]
    public $consulta;

    #[Locked]
    public $consulta_id;

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

    #[Validate('required', message: 'El campo presión sangínea es requerido')]
    public $blood_pressure;

    #[Validate('required', message: 'El campo alergias es requerido')]
    public $allergies;

    #[Validate('required', message: "El campo diagnostico es requerido")]
    public $diagnostic;

    #[Validate('required', message: "El campo tratamiento es requerido")]
    public $treatment;

    public function mount($id)
    {
        $this->consulta = MedicalAppointment::findOrFail($id);
        $this->consulta_id = $this->consulta->id;
        //$this->weight = $this->medicalRecord->weight;
        //$this->size = $this->medicalRecord->size;
        //$this->changeSizeEvent($this->size);
        //$this->glucose = $this->medicalRecord->glucose;
        //$this->changeGlucoseEvent($this->glucose);
        //$this->exercised = $this->medicalRecord->exercised;
        //$this->fast_food = $this->medicalRecord->fast_food;
        //$this->smoking = $this->medicalRecord->smoking;
        //$this->alcoholism = $this->medicalRecord->alcoholism;
        //$this->drugs = $this->medicalRecord->drugs;
    }

    public function render()
    {
        return view('livewire.create-medical-appointment');
    }

    public function createMedicalAppointment()
    {
        $datos_validados = $this->validate();;
        $datos_validados['imc'] = $this->imc;
        $datos_validados['medical_record_id'] = $this->medicalRecord_id;

        $medicalRecord = $this->medicalRecord;

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

        $done = $medicalRecord->save();

        if($done){
            $medicalAppointment['body_temp'] = $datos_validados['body_temp'];
            $medicalAppointment['allergies'] = $datos_validados['allergies'];
            $medicalAppointment['diagnostic'] = $datos_validados['diagnostic'];
            $medicalAppointment['treatment'] = $datos_validados['treatment'];
            $medicalAppointment['medical_record_id'] = $datos_validados['medical_record_id'];

            MedicalAppointment::create($medicalAppointment);

            session()->flash('message', 'La consulta fue creada correctamente');

            return redirect()->route('consultas', $this->medicalRecord_id);
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

    public function changeGlucoseEvent($value)
    {
        $this->glucose_eval = $value <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada';
        $this->glucose_eval_color = $value;

        if ($value === '') {
            $this->glucose_eval = '';
            $this->glucose_eval_color = '';
        }
    }

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
}
