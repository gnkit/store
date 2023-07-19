<?php

namespace App\Modules\Product\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProductData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string|null $description
     * @param string|null $sku
     * @param int $type_id
     * @param int|null $discount_id
     * @param int $price
     * @param int|null $stock
     */
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $description,
        public readonly ?string $sku,
        public readonly int     $type_id,
        public readonly ?int    $discount_id,
        public readonly int     $price,
        public readonly ?int    $stock,
    )
    {
    }
}
