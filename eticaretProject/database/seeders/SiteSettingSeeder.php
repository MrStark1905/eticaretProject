<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            "name"=>"adres",
            "data"=>"Adres bilgileri",
        ]);

        SiteSetting::create([
            "name"=>"phone",
            "data"=>"+90123456789",
        ]);

        SiteSetting::create([
            "name"=>"email",
            "data"=>"test@test.com",
        ]);

        SiteSetting::create([
            "name"=>"harita",
            "data"=>null,
        ]);
    }
}
