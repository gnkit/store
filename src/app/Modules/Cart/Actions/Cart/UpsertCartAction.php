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

        if (!empty($args['session_id'])) {
            $cart = GetBySessionIdCartAction::execute($args['session_id']);
        }

        $cart = Cart::updateOrCreate(
            [
                'id' => $cart->id ?? $data->id,
            ],
            [
                'session_id' => $cart->session_id ?? session()->getId(),
                'user_id' => $data->user_id ?? auth()->user()->id,
            ],
        );

        $argsProducts = [];
        foreach ($args['products'] as $product) {
            $argsProducts[$product['id']] = $product;
        }

        foreach ($cart->products as $cartProduct) {
            if (!array_key_exists($cartProduct->id, $argsProducts)) {
                $cart->products()->detach($cartProduct->id);
            }
        }

        foreach ($args['products'] as $product) {
            $productModel = GetByIdProductAction::execute($product['id']);
            if ($cart->products->contains($productModel)) {
                $cart->products()->updateExistingPivot($productModel, ['quantity' => $product['quantity']]);
            } else {
                $cart->products()->attach($productModel, ['quantity' => $product['quantity']]);
            }
        }

        return $cart;
    }
}
