<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partidos>
 */
class PartidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nameLocal' => $this->faker->sentence(), 
            'nameVisitor' => $this->faker->sentence(), 
            'status' => $this->faker->randomElement(['terminado','ejecucio','programado']),
            'fecha' => $this->faker->localtime() 
        ];
    }
}
