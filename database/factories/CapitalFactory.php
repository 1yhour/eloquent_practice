<?php

namespace Database\Factories;

use App\Models\Capital;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Capital>
 */
class CapitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'population'=>$this->faker->numberBetween(1000,1000000),
        ];
    }
}
