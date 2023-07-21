<?php

namespace App\Modules\Product\Actions\Product;

use App\Modules\Product\Models\Product;

final class DestroyProductAction
{
    /**
     * @param array $args
     * @return Product
     */
    public static function execute(array $args): Product
    {
        $product = GetByIdProductAction::execute($args['id']);
        $product->categories()->detach();
        $product->delete();

        return $product;
    }
}
