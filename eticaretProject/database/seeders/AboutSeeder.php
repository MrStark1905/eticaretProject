<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            "name" => "Stark Collectibles",
            "content" => "Hakkımızda",
            "text1_icon" => "icon-truck",
            "text1" => "Ücretsiz Kargo",
            "text1_content" => "1000₺ ve üzeri alışverişlerinizde ücretsiz kargo gönderimi sağlıyoruz.",
            "text2_icon" => "icon-refresh2",
            "text2" => "Ücretsiz Geri İade",
            "text2_content" => "30 gün içerisinde ücretsiz geri iade imkanı!",
            "text3_icon" => "icon-help",
            "text3" => "Müşteri Desteği",
            "text3_content" => "Websitemiz veya ürünlerimizle ilgili herhangi bir sorununuz olması durumunda bize email üzerinden bildirim sağlayabilirsiniz.",
        ]);
    }
}
