<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\AkunFactory;
use Database\Factories\KomentarFactory;
use Database\Factories\ReviewFactory;
use Database\Factories\ProdukFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        AkunFactory::factory(50)->create();
        ProdukFactory::factory(20)->create();

        ReviewFactory::factory(10)->create();
        KomentarFactory::factory(10)->create();
    }
}
