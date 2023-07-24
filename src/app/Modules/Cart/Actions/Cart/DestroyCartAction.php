<?php

namespace App\Modules\Cart\Actions\Cart;

use App\Modules\Cart\Models\Cart;

final class DestroyCartAction
{
    /**
     * @param array $args
     * @return Cart
     */
    public static function execute(array $args): Cart
    {
        $cart = GetByIdCartAction::execute($args['id']);
        $cart->products()->detach();
        $cart->delete();

        return $cart;
    }
}
