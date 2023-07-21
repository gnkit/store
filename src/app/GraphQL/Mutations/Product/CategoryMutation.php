<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Category\DestroyCategoryAction;
use App\Modules\Product\Actions\Category\UpsertCategoryAction;

final class CategoryMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Category
     */
    public function upsert($_, array $args)
    {
        return UpsertCategoryAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Category
     */
    public function destroy($_, array $args)
    {
        return DestroyCategoryAction::execute($args);
    }

}
