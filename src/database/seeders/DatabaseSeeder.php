<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            TypeSeeder::class,
            DiscountSeeder::class,
            ProductSeeder::class,
            ImageSeeder::class,
            CategorySeeder::class,
            PaymentSeeder::class,
            OrderSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
