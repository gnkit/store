<?php

namespace Database\Seeders;

use App\Modules\Product\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::factory()
            ->count(20)
            ->create();
    }
}
