<?php

namespace App\Modules\Order\Actions\Payment;

use App\Modules\Order\DataTransferObjects\PaymentData;
use App\Modules\Order\Models\Payment;

final class UpsertPaymentAction
{
    /**
     * @param array $args
     * @return Payment
     */
    public static function execute(array $args): Payment
    {
        $data = PaymentData::validateAndCreate($args);

        $payment = Payment::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'type' => $data->type,
            ],
        );

        return $payment;
    }
}
