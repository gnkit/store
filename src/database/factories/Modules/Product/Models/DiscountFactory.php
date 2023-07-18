<?php

namespace Database\Factories\Modules\Product\Models;

use App\Modules\Product\Enums\DiscountType;
use App\Modules\Product\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Product\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Discount::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'value' => fake()->numberBetween(100, 1000),
            'type' => fake()->randomElement(DiscountType::cases()),
            'start_date' => fake()->dateTimeBetween('-2 week', '-1 week'),
            'expiration_date' => fake()->dateTimeBetween('+1 week', '+4 week'),
        ];
    }
}
