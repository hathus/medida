<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class MedicalRecordsFilter extends Component
{

    #[Validate('required', message: 'El campo nombre es requerido para realizar la búsqueda!')]
    public $name;

    /**
     * Función para realizar búsquedas en la BD por el nombre del paciente
     */
    public function searchByName()
    {
        $this->dispatch('name-filter', name: $this->name);
    }
    
    public function render()
    {
        return view('livewire.medical-records-filter');
    }
}
