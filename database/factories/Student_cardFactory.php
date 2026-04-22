<?php

namespace Database\Factories;

use App\Models\Student_card;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student_card>
 */
class Student_cardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "card_number"=>$this->faker->unique()->numerify('##########'),
            "issue_date"=>$this->faker->date(),
        ];
    }
}
