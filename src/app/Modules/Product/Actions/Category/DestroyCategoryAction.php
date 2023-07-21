<?php

namespace App\Modules\Product\Actions\Category;

use App\Modules\Product\Models\Category;

final class DestroyCategoryAction
{
    /**
     * @param array $args
     * @return Category
     */
    public static function execute(array $args): Category
    {
        $category = GetByIdCategoryAction::execute($args['id']);
        $category->products()->detach();
        $category->delete();

        return $category;
    }
}
