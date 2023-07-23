<?php

namespace App\Modules\Product\Actions\Image;

use App\Modules\Product\Models\Image;

class GetByIdImageAction
{
    /**
     * @param $id
     * @return Image
     */
    public static function execute($id): Image
    {
        $image = Image::find($id);

        return $image;
    }

}
