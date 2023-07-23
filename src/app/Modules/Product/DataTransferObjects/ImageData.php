<?php

namespace App\Modules\Product\DataTransferObjects;

use Spatie\LaravelData\Data;

final class ImageData extends Data
{
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $url,
        public readonly int     $product_id,
    )
    {
    }

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'url' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:1024'],
            'product_id' => ['required', 'integer', 'exists:products,id'],
        ];
    }
}
