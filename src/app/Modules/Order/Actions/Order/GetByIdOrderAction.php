<?php

namespace App\Modules\Order\Actions\Order;

use App\Modules\Order\Models\Order;

final class GetByIdOrderAction
{
    /**
     * @param $id
     * @return Order
     */
    public static function execute($id): Order
    {
        $order = Order::find($id);

        return $order;
    }
}
