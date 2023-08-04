<?php

namespace Database\Seeders;

use App\Modules\User\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()
            ->create([
                'name' => 'Customer',
                'slug' => 'customer',
            ]);

        Role::factory()
            ->create([
                'name' => 'Manager',
                'slug' => 'manager',
            ]);

        Role::factory()
            ->create([
                'name' => 'Subscriber',
                'slug' => 'subscriber',
            ]);
    }
}
