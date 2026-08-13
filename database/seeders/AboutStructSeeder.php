<?php

namespace Database\Seeders;

use App\Models\Dashboard\AboutStruct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutStructSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       AboutStruct::factory()->count(4)->create();
    }
}
