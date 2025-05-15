<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ProfesseurController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::get('/', function () {
    return view('dashbord.index');
}); */

Route::get('/', function () {
    return view('dashbord.index');
})->name('dashbord');

Route::get('/eleves', function () {
    return view('eleves.index');
})->name('eleves');

Route::get('/cours', function () {
    return view('cours.index');
})->name('cours');

Route::get('/professeurs', function () {
    return view('professeurs.index');
})->name('professeurs');

Route::get('/filieres', function () {
    return view('filieres.index');
})->name('filieres');


Route::get('eleves', [EleveController::class, 'index'])->name('eleves.index');
/* 
Route::get('/eleves/{id}', [EleveController::class, 'show'])->name('eleves.show'); */
 
