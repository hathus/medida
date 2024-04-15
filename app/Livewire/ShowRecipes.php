<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowRecipes extends Component
{
    #[Locked]
    public $recipes;

    #[On('select-category')]
    public function selectCategory($categoryId)
    {
            $this->recipes = Recipe::where('category_id', $categoryId)->get();
    }

    public function render()
    {
        if($this->recipes === null) {
            $this->recipes = Recipe::where('category_id', 1)->get();
        }

        return view('livewire.show-recipes', [
            'recetas' => $this->recipes,
        ]);
    }
}
