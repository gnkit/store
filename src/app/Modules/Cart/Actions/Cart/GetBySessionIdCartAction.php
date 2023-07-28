<?php

namespace App\Modules\Cart\Actions\Cart;

use App\Modules\Cart\Models\Cart;

final class GetBySessionIdCartAction
{
    /**
     * @param $session_id
     * @return Cart
     */
    public static function execute($session_id): Cart
    {
        $cart = Cart::where('session_id', $session_id)->first();

        return $cart;
    }
}
