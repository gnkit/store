<?php

namespace App\Modules\Order\Actions\Payment;

use App\Modules\Order\DataTransferObjects\PaymentUpdateData;
use App\Modules\Order\Models\Payment;

final class UpdateStatusPaymentAction
{
    /**
     * @param array $args
     * @return Payment
     */
    public static function execute(array $args): Payment
    {
        $data = PaymentUpdateData::validateAndCreate($args);
        $payment = GetByIdPaymentAction::execute($data->payment_id);
        $payment->orders()->updateExistingPivot($data->order_id, ['status' => $data->status]);

        return $payment;
    }
}
