<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ShowMenuRecipes extends Component
{

    #[Locked]
    // public $category_id;

    // public function category($id)
    // {
    //     $this->category_id = $id;
    //     $this->dispatch('select-category', categoryId: $this->category_id);
    // }

    // función que hace el render de la vista
    public function render()
    {
        // $categories = Category::all();

        return view('livewire.show-menu-recipes');
    }
}
