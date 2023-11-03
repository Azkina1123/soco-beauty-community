<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\Review;
use App\Models\Komentar;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Produk::factory(5)->create();

        Review::factory(20)->create();
        Komentar::factory(30)->create();
    }
}
