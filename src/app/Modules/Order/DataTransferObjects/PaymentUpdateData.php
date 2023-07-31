<?php

namespace App\Modules\Order\DataTransferObjects;

use App\Modules\Order\Enums\PaymentStatus;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

final class PaymentUpdateData extends Data
{
    /**
     * @param int $order_id
     * @param int $payment_id
     * @param string $status
     */
    public function __construct(
        public readonly int    $order_id,
        public readonly int    $payment_id,
        #[Enum(PaymentStatus::class)]
        public readonly string $status,
    )
    {
    }

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'order_id' => ['required', 'integer', 'exists:orders,id'],
            'payment_id' => ['required', 'integer', 'exists:payments,id'],
            'status' => ['required', new Enum(PaymentStatus::class)],
        ];
    }
}
