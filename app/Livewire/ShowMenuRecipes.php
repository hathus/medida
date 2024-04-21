<?php

namespace App\Livewire;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ShowMenuRecipes extends Component
{

    public $activityFactor = [
        1 => '1000',
        2 => '1400',
        3 => '1800',
        4 => '2200',
        5 => '2600',
        6 => '3000',
        7 => '3400',
        8 => '3800',
        9 => '4200',
        10 => '4600',
        11 => '5000',
        12 => '5400',
        13 => '5800',
    ];

    #[Locked]
    public $factor_id;

    #[Validate('required', message: 'El consumo calórico es requerido')]
    public $factor;

    public function changeFactor()
    {
        $this->dispatch('selected-factor', factorId: $this->factor);
    }


    public function mount()
    {
        $this->factor = 4;
        $this->activityFactor[$this->factor];
    }

    // función que hace el render de la vista
    public function render()
    {
        return view('livewire.show-menu-recipes');
    }
}
