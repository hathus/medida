<?php

use App\Http\Controllers\MedicalAppointmentController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    // Expedientes Medicos
    Route::view('expedientes', 'medical_records.index')->name('expedientes');
    Route::view('nuevo-expediente', 'medical_records.create')->name('nuevo-expediente');
    Route::get('/medical_records/{medical_record}/edit', [MedicalRecordController::class, 'edit'])->name('editar-expediente');
    Route::get('/medical_records/{medical_record}/show', [MedicalRecordController::class, 'show'])->name('mostrar-expediente');

    // Citas Medicas
    Route::get('medical_appointments/{medical_record}/index', [MedicalAppointmentController::class, 'index'])->name('consultas');
    Route::get('medical_appointments/{medical_record}/create', [MedicalAppointmentController::class, 'create'])->name('nueva-consulta');
    Route::get('medical_appointments/{medical_appointments}/edit', [MedicalAppointmentController::class, 'edit'])->name('editar-consulta');
    Route::get('medical_appointments/{medical_record}/show', [MedicalAppointmentController::class, 'show'])->name('mostrar-consulta');

    // Recetas/Menus
    //Route::get('recipes/index', [RecipeController::class, 'index'])->name('recetas');
    Route::view('recetas', 'recipes.index')->name('recetas');
    Route::get('recipes/{group_id}/{max_factor}/show', [RecipeController::class, 'show'])->name('mostrar-recetas');
    Route::get('recipes/{category_id}/complements', [RecipeController::class, 'complements'])->name('complementos');

    Route::view('valid', 'valid.index')->name('valid');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';
