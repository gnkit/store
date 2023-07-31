<?php

namespace App\Modules\Order\DataTransferObjects;

use App\Modules\Order\Enums\PaymentType;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

final class PaymentData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string $type
     */
    public function __construct(
        public readonly ?int   $id,
        public readonly string $name,
        #[Enum(PaymentType::class)]
        public readonly string $type,
    )
    {
    }

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', new Enum(PaymentType::class)],
        ];
    }
}
