<?php

namespace Database\Factories\Modules\Product\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Product\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(5),
            'sku' => fake()->ean8(),
            'type_id' => fake()->numberBetween(1, 10),
            'price' => fake()->numberBetween(1000, 20000),
            'stock' => fake()->numberBetween(1, 20),
        ];
    }
}
