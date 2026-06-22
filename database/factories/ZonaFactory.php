<?php

namespace Database\Factories;

use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Zona>
 */
class ZonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

        'nombre_zona'=>$this->faker->randomElement([
            'Norte',
            'Sur',
            'Centro'
        ]),
            'tarifa_por_kg'=>$this->faker->randomFloat(2,1,5)
        ];
    }
}
