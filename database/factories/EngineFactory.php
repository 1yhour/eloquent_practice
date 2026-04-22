<?php

namespace Database\Factories;

use App\Models\Engine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Engine>
 */
class EngineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "engine_number"=>$this->faker->numberBetween(1000,100000),
            "type"=>$this->faker->randomElement(['gas','diesel','electric']),
            "car_id"=>$this->faker->numberBetween(1,100),
        ];
    }
}
