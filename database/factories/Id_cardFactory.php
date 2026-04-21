<?php

namespace Database\Factories;

use App\Models\Id_card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Id_card>
 */
class Id_cardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "card_number" => $this->faker->unique()->numerify('ID-####'),
            "issue_date" => $this->faker->date(),
        ];
    }
}
