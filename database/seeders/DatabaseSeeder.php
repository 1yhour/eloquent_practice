<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Id_card;
use App\Models\User1;
use App\Models\Address;
use App\Models\Student;
use App\Models\Student_card;
use App\Models\Car;
use App\Models\Engine;
use App\Models\Country;
use App\Models\Capital;
use App\Models\UserPro;
use App\Models\Profile; 
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);\
        
        Employee::factory(200)->has(Id_card::factory())->create();
        User1::factory(200)->create()->each(function($user){
            $user->address()->create([
                'city' => fake()->city(),
                'country' => fake()->country(),
                'street' => fake()->streetAddress(),
            ]);
        });
        Student::factory(200)->create()->each(function($st){
            $st->studentCard()->create([
                'card_number' => fake()->unique()->randomNumber(8, true),
                'issue_date' => fake()->date(),
            ]);
        });
        Car::factory(200)->create()->each(function ($car){
            $car->engine()->create([
                'engine_number' => fake()->unique()->randomNumber(6, true),
                'type' => fake()->randomElement(['gas','diesel','electric']),
            ]);
        });
        Country::factory(200)->create()->each(function($country){
            $country->capital()->create([
                'name' => fake()->name,
                'population' => fake()->numberBetween(1000,1000000),
            ]);
        });
        UserPro::factory(200)->create()->each(function($user){
            $user->profile()->create([
                'bio' => fake()->sentence(),
                'phone' => fake()->phoneNumber(),
            ]);
        });
        User1::factory(20)->create();
        User1::factory(5)->hasAddress()->create();
    }
}
