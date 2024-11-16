<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => null,
            "name" => "Erkek",
            "content" => "Erkek Giyim",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $erkek->id,
            "name" => "Erkek Kazak",
            "content" => "Erkek Kazaklar",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $erkek->id,
            "name" => "Erkek Pantolon",
            "content" => "Erkek Pantolon",
            "status" => "1"
        ]);

        $kadın = Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => null,
            "name" => "Kadın",
            "content" => "Kadın Giyim",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $kadın->id,
            "name" => "Kadın Çanta",
            "content" => "Kadın Çantalar",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $kadın->id,
            "name" => "Kadın Pantolon",
            "content" => "Kadın Pantolonlar",
            "status" => "1"
        ]);

        $cocuk = Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => null,
            "name" => "Çocuk",
            "content" => "Çocuk Giyim",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $cocuk->id,
            "name" => "Çocuk Oyuncaklar",
            "content" => "Çocuk Oyuncaklar",
            "status" => "1"
        ]);

        Category::create([
            "image" => null,
            "thumbnail" => null,
            "cat_ust" => $cocuk->id,
            "name" => "Çocuk Pantolon",
            "content" => "Çocuk Pantolon",
            "status" => "1"
        ]);
    }
}
