<?php

namespace App\Modules\Product\Services\Image;

use Illuminate\Support\Facades\Storage;

final class ImageUploadProductService
{
    /**
     * @param $image
     * @param $product_id
     * @return mixed
     */
    public function upload($image, $product_id)
    {
        return $this->store($image, $product_id);
    }

    /**
     * @param $product_id
     * @return void
     */
    public function destroyAll($product_id)
    {
        $image_path = (public_path('storage') . '/products/' . $product_id);

        if (is_dir($image_path)) {

            $files = array_diff(scandir($image_path), array('.', '..'));
            foreach ($files as $file) {
                $this->destroy($file, $product_id);
            }

            rmdir($image_path);
        }
    }

    /**
     * @param $image
     * @param $product_id
     * @return void
     */
    public function destroy($image, $product_id)
    {
        $image_path = (public_path('storage') . '/products/' . $product_id . '/' . $image);

        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    /**
     * @param $image
     * @param $product_id
     * @return mixed
     */
    private function store($image, $product_id)
    {
        $file = $image;
        $name = $file->hashName();
        $file->storeAs('public/products/' . $product_id . '/', $name);

        return $name;
    }

}
