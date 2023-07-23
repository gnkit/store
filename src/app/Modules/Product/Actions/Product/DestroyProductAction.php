<?php

namespace App\Modules\Product\Actions\Product;

use App\Modules\Product\Models\Product;
use App\Modules\Product\Services\Image\ImageUploadProductService;

final class DestroyProductAction
{
    /**
     * @param array $args
     * @return Product
     */
    public static function execute(array $args): Product
    {
        $product = GetByIdProductAction::execute($args['id']);
        (new ImageUploadProductService())->destroyAll($product->id);
        $product->categories()->detach();
        $product->delete();

        return $product;
    }
}
