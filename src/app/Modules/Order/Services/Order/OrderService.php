<?php

namespace App\Modules\Order\Services\Order;

use App\Modules\Order\Actions\Payment\GetByIdPaymentAction;
use App\Modules\Product\Actions\Product\GetByIdProductAction;
use Illuminate\Database\Eloquent\Model;

final class OrderService
{
    /**
     * @param $order
     * @param $payments
     * @return void
     */
    public function syncPivotOrderPayment($order, $payments)
    {
        $this->detachPivot($order, $payments, 'payments');

        foreach ($payments as $payment) {
            $paymentModel = GetByIdPaymentAction::execute($payment['id']);
            if ($order->payments->contains($paymentModel)) {
                $order->payments()->updateExistingPivot($paymentModel, ['status' => $payment['status']]);
            } else {
                $order->payments()->attach($paymentModel, ['status' => $payment['status']]);
            }
        }

    }

    /**
     * @param $order
     * @param $products
     * @return void
     */
    public function syncPivotOrderProduct($order, $products)
    {
        $this->detachPivot($order, $products, 'products');

        foreach ($products as $product) {
            $productModel = GetByIdProductAction::execute($product['id']);
            if ($order->products->contains($productModel)) {
                $order->products()->updateExistingPivot($productModel, [
                    'quantity' => $product['quantity'],
                    'total' => ($product['quantity'] * $productModel->price),
                    'discount' => ($product['quantity'] * $productModel->discount->value),
                ]);
            } else {
                $order->products()->attach($productModel, [
                    'quantity' => $product['quantity'],
                    'total' => ($product['quantity'] * $productModel->price),
                    'discount' => ($product['quantity'] * $productModel->discount->value),
                ]);
            }
        }
    }

    /**
     * @param Model $model
     * @param array $args
     * @param string $relations
     * @return void
     */
    public function detachPivot(Model $model, array $args, string $relations)
    {
        $argsItems = [];
        foreach ($args as $arg) {
            $argsItems[$arg['id']] = $arg;
        }

        foreach ($model->{$relations} as $relation) {
            if (!array_key_exists($relation->id, $argsItems)) {
                $model->{$relations}()->detach($relation->id);
            }
        }
    }

    /**
     * @param $products
     * @return float|int
     */
    public function getTotal($products)
    {
        $total = [];
        foreach ($products as $product) {
            $product = GetByIdProductAction::execute($product['id']);
            $total[] = $product->price;
        }

        return array_sum($total);
    }

    /**
     * @param $products
     * @return float|int
     */
    public function getTotalDiscount($products)
    {
        $total = [];
        foreach ($products as $product) {
            $product = GetByIdProductAction::execute($product['id']);
            $total[] = $product->discount->value;
        }

        return array_sum($total);
    }
}
