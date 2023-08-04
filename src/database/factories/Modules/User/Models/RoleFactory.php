<?php

namespace Database\Factories\Modules\User\Models;

use App\Modules\User\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\User\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = 'Role ' . fake()->word();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
