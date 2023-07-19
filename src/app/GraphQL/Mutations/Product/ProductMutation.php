<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Product\DestroyTypeAction;
use App\Modules\Product\Actions\Product\UpsertTypeAction;

final class ProductMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Product
     */
    public function upsert($_, array $args)
    {
        return UpsertTypeAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Product
     */
    public function destroy($_, array $args)
    {
        return DestroyTypeAction::execute($args);
    }

}