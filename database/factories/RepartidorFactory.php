<?php

namespace Database\Factories;

use App\Models\Repartidor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Repartidor>
 */
class RepartidorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Los seeders ayudan para llenar la tabla, segun estos parametros
            'nombre'=>$this->faker->name(),
            'email'=>$this->faker->safeEmail()
        ];
    }
}
