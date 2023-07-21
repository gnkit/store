<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Product\DestroyProductAction;
use App\Modules\Product\Actions\Product\UpsertProductAction;

final class ProductMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Product
     */
    public function upsert($_, array $args)
    {
        return UpsertProductAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Product
     */
    public function destroy($_, array $args)
    {
        return DestroyProductAction::execute($args);
    }

}
