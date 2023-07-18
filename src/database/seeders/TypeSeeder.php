<?php

namespace Database\Seeders;

use App\Modules\Product\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::factory()
            ->count(10)
            ->create();
    }
}
