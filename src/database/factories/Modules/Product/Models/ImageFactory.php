<?php

namespace Database\Factories\Modules\Product\Models;

use App\Modules\Product\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Product\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => 'https://picsum.photos/200',
            'product_id' => fake()->numberBetween(1, 20)
        ];
    }
}
