<?php

namespace App\Modules\Product\Actions\Product;

use App\Modules\Product\DataTransferObjects\ProductData;
use App\Modules\Product\Models\Product;

final class UpsertProductAction
{
    /**
     * @param array $args
     * @return Product
     */
    public static function execute(array $args): Product
    {
        $data = ProductData::validateAndCreate($args);

        $product = Product::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'description' => $data->description,
                'sku' => $data->sku,
                'type_id' => $data->type_id,
                'discount_id' => $data->discount_id,
                'price' => $data->price,
                'stock' => $data->stock,
            ],
        );

        return $product;
    }
}
