<?php

namespace App\Modules\Product\DataTransferObjects;

use Carbon\Carbon;
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
        public readonly ?int     $id,
        public readonly string   $name,
        public readonly int      $value,
        public readonly string   $type,
        public readonly Carbon $start_date,
        public readonly Carbon $expiration_date,
    )
    {
    }
}
