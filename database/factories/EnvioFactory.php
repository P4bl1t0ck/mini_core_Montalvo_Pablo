<?php

namespace Database\Factories;

use App\Models\Envio;
use App\Models\Repartidor;
use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Envio>
 */
class EnvioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_repartidor'=>Repartidor::factory(),

            'id_zona'=>Zona::factory(),

            'peso_kg'=>$this->faker->randomFloat(2,1,20),

            'fecha_envio'=>$this->faker->date()
            ];
    }
}
