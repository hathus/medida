<?php

namespace App\Http\Controllers;

use App\Models\FoodComplement;
use App\Models\Recipe;

class RecipeController extends Controller
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
        14 => '6200',
    ];

    public $complementsMenu = [
        1 => 'Alimentos',
        2 => 'Agua',
        3 => 'Té',
    ];

    public $maxFactor;
    
    public function index()
    {
        return view('livewire.recipes.index');
    }

    public function complements($categoryId)
    {
        $complements  = FoodComplement::where('category', '=', $categoryId)->get();
        
        return view('recipes.complements', [
            'complements' => $complements,
            'category' => $this->complementsMenu[$categoryId],
        ]);
    }

    public function show($groupId, $maxFactor)
    {
        $this->calcMaxFactor($maxFactor);
        $minFactor = $this->maxFactor - 399;

        //$this->recipes = Recipe::whereBetween('total_cal', [$this->minFactor, $this->maxFactor])->paginate(7);
        $recipes = Recipe::where('group_id', $groupId)
            ->whereBetween('total_cal', [$minFactor, $this->maxFactor])
            ->get();

        return view('recipes.show', [
            'recipes' => $recipes,
            'group_id' => $groupId,
            'max_factor' => $this->maxFactor,
        ]);
    }

    public function calcMaxFactor($factor)
    {
        if($factor <= 1000)
        {
            $this->maxFactor = 1000;
        }
        elseif($factor >= 1001 && $factor <= 1400)
        {
            $this->maxFactor = 1400;
        }
        elseif($factor >= 1401 && $factor <= 1800)
        {
            $this->maxFactor = 1800;
        }

        elseif($factor >= 1801 && $factor <= 2200)
        {
            $this->maxFactor = 2200;
        }
        elseif($factor >= 2201 && $factor <= 2600)
        {
            $this->maxFactor = 2600;
        }
        elseif($factor >= 2601 && $factor <= 3000)
        {
            $this->maxFactor = 3000;
        }
        elseif($factor >= 3001 && $factor <= 3400)
        {
            $this->maxFactor = 3400;
        }
        elseif($factor >= 3401 && $factor <= 3800)
        {
            $this->maxFactor = 3800;
        }
        elseif($factor >= 3801 && $factor <= 4200)
        {
            $this->maxFactor = 4200;
        }
        elseif($factor >= 4201 && $factor <= 4600)
        {
            $this->maxFactor = 4600;
        }
        elseif($factor >= 4601 && $factor <= 5000)
        {
            $this->maxFactor = 5000;
        }
        elseif($factor >= 5001 && $factor <= 5400)
        {
            $this->maxFactor = 5400;
        }
        elseif($factor >= 5401 && $factor <= 5800)
        {
            $this->maxFactor = 5800;
        }
        elseif($factor >= 5801 && $factor <= 6200)
        {
            $this->maxFactor = 6200;
        }
    }
}
