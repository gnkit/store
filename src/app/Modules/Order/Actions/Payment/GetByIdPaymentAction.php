<?php

namespace App\Modules\Order\Actions\Payment;

use App\Modules\Order\Models\Payment;

final class GetByIdPaymentAction
{
    /**
     * @param $id
     * @return Payment
     */
    public static function execute($id): Payment
    {
        $payment = Payment::find($id);

        return $payment;
    }
}
