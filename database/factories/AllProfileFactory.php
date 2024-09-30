<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AllProfile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AllProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // fake()
            'name' => fake()->name(), // 'name',
            'email' => fake()->email(),// 'email',
            'birthdate' => fake()->date(),// 'birthdate',
            'home_address' => fake()->address(),// 'home_address',
            'contact_number' => fake()->phoneNumber(),// 'contact_number',
        ];
    }
}
