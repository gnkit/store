<?php

namespace App\Modules\Product\Actions\Category;

use App\Modules\Product\Models\Category;

final class GetByIdCategoryAction
{
    /**
     * @param $id
     * @return Category
     */
    public static function execute($id): Category
    {
        $category = Category::find($id);

        return $category;
    }
}
