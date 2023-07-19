<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Discount\DestroyDiscountAction;
use App\Modules\Product\Actions\Discount\UpsertDiscountAction;

final class DiscountMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Discount
     */
    public function upsert($_, array $args)
    {
        return UpsertDiscountAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Discount
     */
    public function destroy($_, array $args)
    {
        return DestroyDiscountAction::execute($args);
    }

}
