<?php

namespace App\Modules\Product\DataTransferObjects;

use App\Modules\Product\Enums\DiscountType;
use Carbon\Carbon;
use Spatie\LaravelData\Attributes\Validation\Enum;
use Spatie\LaravelData\Data;

final class DiscountData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param int $value
     * @param string $type
     * @param Carbon $start_date
     * @param Carbon $expiration_date
     */
    public function __construct(
        public readonly ?int   $id,
        public readonly string $name,
        public readonly int    $value,
        #[Enum(DiscountType::class)]
        public readonly string $type,
        public readonly Carbon $start_date,
        public readonly Carbon $expiration_date,
    )
    {
    }

    /**
     * @return array[]
     */
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'value' => ['required', 'numeric'],
            'type' => ['required', new Enum(DiscountType::class)],
            'start_date' => ['required', 'date'],
            'expiration_date' => ['required', 'date'],
        ];
    }
}
