<?php

namespace App\Modules\Order\Actions\Payment;

use App\Modules\Order\Models\Payment;

final class DestroyPaymentAction
{
    /**
     * @param array $args
     * @return Payment
     */
    public static function execute(array $args): Payment
    {
        $payment = GetByIdPaymentAction::execute($args['id']);
//        $payment->products()->detach();
        $payment->delete();

        return $payment;
    }
}
