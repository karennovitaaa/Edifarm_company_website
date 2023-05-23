<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'username' => fake()->userName,
        'name' => fake()->name,
        'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        'photo' => fake()->imageUrl(),
        'address' => fake()->address,
        'phone' => '1234567890',
        'born_date' => fake()->date(),
        'bio' => fake()->paragraph,
        'latitude' => fake()->latitude,
        'longitude' => fake()->longitude,
        'email' => fake()->unique()->safeEmail,
        'password' => bcrypt('123'),
        'level' => fake()->randomElement(['admin', 'user']),
        'created_at' => now(),
        'updated_at' => now(), 
         // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
