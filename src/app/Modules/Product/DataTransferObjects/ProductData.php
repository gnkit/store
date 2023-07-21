<?php

namespace App\Modules\Product\DataTransferObjects;

use Spatie\LaravelData\Data;

final class ProductData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string|null $description
     * @param string|null $sku
     * @param int|null $type_id
     * @param int|null $discount_id
     * @param int $price
     * @param int $stock
     */
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $description,
        public readonly ?string $sku,
        public readonly ?int    $type_id,
        public readonly ?int    $discount_id,
        public readonly int     $price,
        public readonly int     $stock,
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
            'description' => ['nullable', 'string', 'max:4096'],
            'sku' => ['nullable', 'string', 'max:20'],
            'type_id' => ['nullable', 'integer', 'exists:types'],
            'discount_id' => ['nullable', 'integer', 'exists:discounts'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
        ];
    }
}
