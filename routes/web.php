<?php

use App\Http\Controllers\EnvioController;
use Illuminate\Support\Facades\Route;

/* Aqui dentro de nuestras rutas manejaremos unas rutas simples para solo mostrar el ejercicio */

//Por eso solo usaremos un post y get funciones para este ejercicio.
Route::get('/envios',[EnvioController::class,'index'])-> name('Envios.index');

Route::post('/calcular',[EnvioController::class,'calcular'])->name('Envios.envio');

//La funcion por defecto
Route::get('/', function () {
    return view('welcome');
});
