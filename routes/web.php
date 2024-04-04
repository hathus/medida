<?php

use App\Http\Controllers\MedicalRecordController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('expedientes', 'medical_records.index')->name('expedientes');
    Route::view('nuevo-expediente', 'medical_records.create')->name('nuevo-expediente');
    Route::get('/medical_records/{medical_record}/edit', [MedicalRecordController::class, 'edit'])->name('editar-expediente');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
