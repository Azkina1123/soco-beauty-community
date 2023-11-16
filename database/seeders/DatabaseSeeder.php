<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Komentar;
use App\Models\Review;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // buat akun admin & user
        // User::factory(1)->create();

        User::factory(10)->create();
        Produk::factory(15)->create();
        Review::factory(20)->create();
        Komentar::factory(60)->create();
    }
}
