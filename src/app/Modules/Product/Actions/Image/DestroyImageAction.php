<?php

namespace App\Modules\Product\Actions\Image;

use App\Modules\Product\Models\Image;
use App\Modules\Product\Services\Image\ImageUploadProductService;

final class DestroyImageAction
{
    /**
     * @param array $args
     * @return Image
     */
    public static function execute(array $args): Image
    {
        $image = GetByIdImageAction::execute($args['id']);
        (new ImageUploadProductService())->destroy($image->url, $image->product_id);
        $image->delete();

        return $image;
    }
}
