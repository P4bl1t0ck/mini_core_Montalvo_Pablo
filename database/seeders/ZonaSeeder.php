<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Datos fijos dentro de la tabla de la zona segun la asignacion
        Zona::create([
            'nombre_zona'=>'Norte',
            'tarifa_por_kg'=>1.50
        ]);

        Zona::create([
            'nombre_zona'=>'Sur',
            'tarifa_por_kg'=>2.00
        ]);

        Zona::create([
            'nombre_zona'=>'Centro',
            'tarifa_por_kg'=>1.75
        ]);
    }
}
