<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class EnvioController extends Controller
{
    //En comparacion con MongoDb este es nuestro showall()
    public function index(){
        return view('Envios.envio');
    }

    //Este es nuestra funcion calcular que hara lo de multiplicar el peso, por el precio
    public function calcular(){
        
    }
}
