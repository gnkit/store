<?php

namespace App\Modules\Product\Actions\Discount;

use App\Modules\Product\Models\Discount;

final class DestroyDiscountAction
{
    /**
     * @param array $args
     * @return Discount
     */
    public static function execute(array $args): Discount
    {
        $discount = Discount::find($args['id']);
        $discount->delete();

        return $discount;
    }
}
