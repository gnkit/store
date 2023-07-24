<?php

namespace App\Modules\Cart\Actions\Cart;

use App\Modules\Cart\DataTransferObjects\CartData;
use App\Modules\Cart\Models\Cart;
use App\Modules\Product\Actions\Product\GetByIdProductAction;

final class UpsertCartAction
{
    /**
     * @param array $args
     * @return Cart
     */
    public static function execute(array $args): Cart
    {
        $data = CartData::validateAndCreate($args);
        $product = GetByIdProductAction::execute($args['product_id']);
        $cart = Cart::where('session_id', $args['session_id'])->first();

        $cart = Cart::updateOrCreate(
            [
                'id' => $cart->id ?? $data->id,
            ],
            [
                'session_id' => $cart->session_id ?? session()->getId(),
                'user_id' => $data->user_id ?? auth()->user()->id,
            ],
        );

        if ($cart->products->contains($product)) {
            $cart->products()->updateExistingPivot($product, ['quantity' => $args['quantity']]);
        } else {
            $cart->products()->attach($product, ['quantity' => $args['quantity']]);
        }

        return $cart;
    }
}
