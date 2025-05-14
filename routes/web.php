<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('eleves', [EleveController::class, 'index'])->name('eleves.index');

Route::get('/eleves/{id}', [EleveController::class, 'show'])->name('eleves.show');
 
