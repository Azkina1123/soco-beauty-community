<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akun>
 */
class AkunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = [
            "user-1.jpg",
            "user-2.jpg",
            "user-3.jpg",
            "user-4.jpg",
            "user-5.jpg",
            "user-6.jpg",
            "user-7.jpg",
            "user-8.jpg",
            "user-9.jpg",
            "user-10.jpg",
        ];

        return [
            'username' => fake()->userName(),
            'nama_lengkap' => fake()->name(),
            'admin' => false,
            'password' => Hash::make("1"),
            'gambar' => fake()->randomElement($users),
        ];
    }
}
