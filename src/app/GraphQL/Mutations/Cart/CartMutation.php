<?php

namespace App\GraphQL\Mutations\Cart;

use App\Modules\Cart\Actions\Cart\DestroyCartAction;
use App\Modules\Cart\Actions\Cart\UpsertCartAction;

final class CartMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Cart\Models\Cart
     */
    public function upsert($_, array $args)
    {
        return UpsertCartAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Cart\Models\Cart
     */
    public function destroy($_, array $args)
    {
        return DestroyCartAction::execute($args);
    }

}
