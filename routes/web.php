<?php

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\VotantesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/votante', function () {
    return view('index');
})->name('votante');

Route::get('/candidato', function () {
    return view('candidato');
})->name('candidatos');


//para guardar un votante
Route::post('/votante', [VotantesController::class, 'store'])->name('votantes');

//para guardar un candidato
Route::post('/candidato', [CandidatosController::class, 'store'])->name('candidatos');

//para traer los candidatos
Route::get('/votante', [VotantesController::class, 'index'])->name('votantes');