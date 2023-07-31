<?php

namespace App\GraphQL\Mutations\Order;

use App\Modules\Order\Actions\Order\DestroyOrderAction;
use App\Modules\Order\Actions\Order\UpsertOrderAction;

final class OrderMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Order\Models\Order
     */
    public function upsert($_, array $args)
    {
        return UpsertOrderAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Order\Models\Order
     */
    public function destroy($_, array $args)
    {
        return DestroyOrderAction::execute($args);
    }
}
