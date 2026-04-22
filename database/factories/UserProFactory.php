<?php

namespace Database\Factories;

use App\Models\UserPro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<UserPro>
 */
class UserProFactory extends Factory
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
            "name" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "password" => $this->faker->password,
        ];
    }
}
