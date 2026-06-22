<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Envio;

class EnvioController extends Controller
{
    public function index()
    {
        return view('Envios.index');
    }

    public function calcular(Request $request)
    {
        $envios = Envio::with([
            'repartidor',
            'zona'
        ])
        ->whereBetween(
            'fecha_envio',
            [
                $request->fecha_inicio,
                $request->fecha_fin
            ]
        )
        ->get();

        $resultados = $envios
        ->groupBy('id_repartidor')
        ->map(function ($grupo)
        {

            return [

                'nombre' =>
                    $grupo->first()
                    ->repartidor
                    ->nombre,

                'cantidad_envios' =>
                    $grupo->count(),

                'total_kg' =>
                    $grupo->sum('peso_kg'),

                'costo_total' =>
                    $grupo->sum(
                        fn($envio) =>
                        $envio->peso_kg *
                        $envio->zona->tarifa_por_kg
                    )

            ];

        });

        return view(
            'Envios.envio',
            [
                'resultados' => $resultados
            ]
        );
    }
}