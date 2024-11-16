<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Factories\ProductFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SliderSeeder::class,
            CategorySeeder::class,
            AboutSeeder::class,
            SiteSettingSeeder::class,
            ProductSeeder::class
        ]);

        Product::factory(100)->create();
    }
}
