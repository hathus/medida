<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalRecords extends Controller
{
    public function index()
    {
        return view('medical_records.index');
    }
}
