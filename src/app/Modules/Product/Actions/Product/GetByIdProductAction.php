<?php

namespace App\Modules\Product\Actions\Product;

use App\Modules\Product\Models\Product;

final class GetByIdProductAction
{
    /**
     * @param $id
     * @return Product
     */
    public static function execute($id): Product
    {
        $category = Product::find($id);

        return $category;
    }
}
