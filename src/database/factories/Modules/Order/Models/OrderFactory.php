<?php

namespace Database\Factories\Modules\Order\Models;

use App\Modules\Order\Enums\DeliveryType;
use App\Modules\Order\Enums\OrderStatus;
use App\Modules\Order\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Order\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(OrderStatus::cases()),
            'delivery_type' => fake()->randomElement(DeliveryType::cases()),
            'total_discount' => fake()->numberBetween(100, 1000),
            'total' => fake()->numberBetween(1000, 10000),
            'comment' => fake()->sentence(5),
            'user_id' => fake()->numberBetween(1, 11),
        ];
    }
}
