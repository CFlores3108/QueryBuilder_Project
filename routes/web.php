<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Ruta principal para poder obtener todos los ejercicios propuestos
Route::get('/', [ProjectController::class, 'index']);