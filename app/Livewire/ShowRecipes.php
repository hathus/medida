<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowRecipes extends Component
{
    #[Locked]
    //public $recipes;

    #[On('select-category')]
    // public function selectCategory($categoryId)
    // {
    //         $this->recipes = Recipe::where('category_id', $categoryId)->get();
    // }

    public function render()
    {
        $recipes = Recipe::all();

        return view('livewire.show-recipes', [
            'recipes' => $recipes,
        ]);
    }
}
