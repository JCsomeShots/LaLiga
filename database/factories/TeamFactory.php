<?php

namespace Database\Factories;
use App\Models\Team; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(), 
            'slogan' => $this->faker->paragraph(),
            'creation' => $this->faker->randomElement(['-2', '-5', '+5'])
        ];
    }
}
