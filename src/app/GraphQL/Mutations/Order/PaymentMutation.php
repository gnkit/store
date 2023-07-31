<?php

namespace App\GraphQL\Mutations\Order;

use App\Modules\Order\Actions\Payment\DestroyPaymentAction;
use App\Modules\Order\Actions\Payment\UpdateStatusPaymentAction;
use App\Modules\Order\Actions\Payment\UpsertPaymentAction;

final class PaymentMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Order\Models\Payment
     */
    public function upsert($_, array $args)
    {
        return UpsertPaymentAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Order\Models\Payment
     */
    public function destroy($_, array $args)
    {
        return DestroyPaymentAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Order\Models\Payment
     */
    public function updateStatus($_, array $args)
    {
        return UpdateStatusPaymentAction::execute($args);
    }

}
