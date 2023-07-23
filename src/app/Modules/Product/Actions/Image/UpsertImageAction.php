<?php

namespace App\Modules\Product\Actions\Image;

use App\Modules\Product\DataTransferObjects\ImageData;
use App\Modules\Product\Models\Image;
use App\Modules\Product\Services\Image\ImageUploadProductService;

final class UpsertImageAction
{
    /**
     * @param array $args
     * @return Image
     */
    public static function execute(array $args): Image
    {
        $data = ImageData::validateAndCreate($args);
        $image = Image::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'url' => (new ImageUploadProductService())->upload($args['url'], $args['product_id']),
                'product_id' => $data->product_id,
            ],
        );

        return $image;
    }
}
