<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return view('livewire.recipes.index');
    }

    public function show($groupId, $maxFactor)
    {
        $minFactor = $maxFactor - 399;

        //$this->recipes = Recipe::whereBetween('total_cal', [$this->minFactor, $this->maxFactor])->paginate(7);
        $recipes = Recipe::where('group_id', $groupId)
            ->whereBetween('total_cal', [$minFactor, $maxFactor])
            ->get();

        return view('livewire.recipes.show', [
            'recipes' => $recipes,
            'group_id' => $groupId,
            'max_factor' => $maxFactor,
        ]);
    }
}
