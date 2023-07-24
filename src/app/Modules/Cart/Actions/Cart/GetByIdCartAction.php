<?php

namespace App\Modules\Cart\Actions\Cart;

use App\Modules\Cart\Models\Cart;

final class GetByIdCartAction
{
    /**
     * @param $id
     * @return Cart
     */
    public static function execute($id): Cart
    {
        $cart = Cart::find($id);

        return $cart;
    }
}
