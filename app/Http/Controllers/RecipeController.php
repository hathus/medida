<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return view('livewire.recipes.index');
    }
}
