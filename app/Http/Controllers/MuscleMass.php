<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuscleMass extends Controller
{
    public function index()
    {
        return view('muscle_mass.index');
    }
}
