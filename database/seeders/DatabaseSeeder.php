<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*Con esto llamamos a las funciones dentro de los Seeders, que hacen referencia a los factorys
        , y podemos mecanizar la creacion de datos. */    
        $this->call([
            RepartidorSeeder::class,
            ZonaSeeder::class,
            EnvioSeeder::class 
        ]);
    }
}
