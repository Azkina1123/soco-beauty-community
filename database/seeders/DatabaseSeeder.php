<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Akun;
use App\Models\Produk;
use App\Models\Review;
use App\Models\Komentar;
use Illuminate\Database\Seeder;
use Database\Factories\AkunFactory;
use Database\Factories\ProdukFactory;
use Database\Factories\ReviewFactory;
use Database\Factories\KomentarFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Akun::factory(50)->create();
        Produk::factory(20)->create();

        Review::factory(10)->create();
        Komentar::factory(10)->create();
    }
}
