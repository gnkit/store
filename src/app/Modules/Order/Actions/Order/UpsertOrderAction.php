<?php

namespace App\Modules\Order\Actions\Order;

use App\Modules\Order\DataTransferObjects\OrderData;
use App\Modules\Order\Models\Order;
use App\Modules\Order\Services\Order\OrderService;

final class UpsertOrderAction
{
    /**
     * @param array $args
     * @return Order
     */
    public static function execute(array $args): Order
    {
        $data = OrderData::validateAndCreate($args);
        $totalDiscount = (new OrderService())->getTotalDiscount($args['products']);
        $total = (new OrderService())->getTotal($args['products']);

        $order = Order::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'status' => $data->status,
                'delivery_type' => $data->delivery_type,
                'total_discount' => $data->total_discount ?? $totalDiscount,
                'total' => $data->total ?? $total,
                'comment' => $data->comment,
                'user_id' => $data->user_id,
            ],
        );

        (new OrderService())->syncPivotOrderProduct($order, $args['products']);
        (new OrderService())->syncPivotOrderPayment($order, $args['payments']);

        return $order;
    }
}
