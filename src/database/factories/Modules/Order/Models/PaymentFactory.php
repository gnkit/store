<?php

namespace Database\Factories\Modules\Order\Models;

use App\Modules\Order\Enums\PaymentType;
use App\Modules\Order\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Order\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'type' => fake()->randomElement(PaymentType::cases()),
        ];
    }
}
