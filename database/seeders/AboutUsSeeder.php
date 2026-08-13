<?php

namespace Database\Seeders;

use App\Models\Dashboard\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        AboutUs::create([
            'title_ar' => 'About Us Ar',    
            'title_en' => 'About Us En',   
            'short_desc_en' => $faker->sentence,
            'short_desc_ar' => $faker->sentence,
            'text_ar' => $faker->paragraph,
            'text_en' => $faker->paragraph,
        ]);
    }
}
