<?php

namespace App\Modules\Order\DataTransferObjects;

use App\Modules\Order\Enums\DeliveryType;
use App\Modules\Order\Enums\OrderStatus;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

final class OrderData extends Data
{
    /**
     * @param int|null $id
     * @param string $status
     * @param string $delivery_type
     * @param int|null $total_discount
     * @param int|null $total
     * @param string|null $comment
     * @param int $user_id
     */
    public function __construct(
        public readonly ?int    $id,
        #[Enum(OrderStatus::class)]
        public readonly string  $status,
        public readonly string  $delivery_type,
        public readonly ?int    $total_discount,
        public readonly ?int    $total,
        public readonly ?string $comment,
        public readonly int     $user_id,
    )
    {
    }

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'status' => ['required', new Enum(OrderStatus::class)],
            'delivery_type' => ['required', new Enum(DeliveryType::class)],
            'total_discount' => ['nullable', 'integer'],
            'total' => ['nullable', 'integer'],
            'comment' => ['nullable', 'string', 'max:4096'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }
}
