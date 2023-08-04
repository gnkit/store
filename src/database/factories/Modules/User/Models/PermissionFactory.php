<?php

namespace Database\Factories\Modules\User\Models;

use App\Modules\User\Models\Permission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\User\Models\Permission>
 */
class PermissionFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Permission::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->word();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
