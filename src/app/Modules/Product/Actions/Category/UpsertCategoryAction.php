<?php

namespace App\Modules\Product\Actions\Category;

use App\Modules\Product\DataTransferObjects\CategoryData;
use App\Modules\Product\Models\Category;
use Illuminate\Support\Str;

final class UpsertCategoryAction
{
    /**
     * @param array $args
     * @return Category
     */
    public static function execute(array $args): Category
    {
        $data = CategoryData::validateAndCreate($args);

        $category = Category::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'slug' => Str::slug($data->name),
                'parent_id' => $data->parent_id,
            ],
        );

        return $category;
    }
}
