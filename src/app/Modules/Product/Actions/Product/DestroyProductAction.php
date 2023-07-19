<?php

namespace App\Modules\Product\Actions\Product;

use App\Modules\Product\Models\Product;

class DestroyProductAction
{
    /**
     * @param array $args
     * @return Product
     */
    public static function execute(array $args): Product
    {
        $product = Product::find($args['id']);
        $product->delete();

        return $product;
    }
}
