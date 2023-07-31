<?php

namespace App\Modules\Order\Actions\Order;

use App\Modules\Order\Models\Order;

final class DestroyOrderAction
{
    /**
     * @param array $args
     * @return Order
     */
    public static function execute(array $args): Order
    {
        $order = GetByIdOrderAction::execute($args['id']);
        $order->products()->detach();
        $order->payments()->detach();
        $order->delete();

        return $order;
    }
}
