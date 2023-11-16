<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'gambar' => fake()->unique()->randomElement($users),
        ];

        // // tambahkan admin
        // return [
        //     'username' => "admin",
        //     'nama_lengkap' => "Arabella Beth",
        //     'admin' => true,
        //     'password' => Hash::make("admin"),
        //     'gambar' => "admin.png",
        // ];

        // // tambahkan user
        // return [
        //     'username' => "vanezuela123",
        //     'nama_lengkap' => "Vanez Blossom",
        //     'admin' => false,
        //     'password' => Hash::make("123"),
        //     'gambar' => "vanezuela123.png",
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
