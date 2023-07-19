<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Type\DestroyTypeAction;
use App\Modules\Product\Actions\Type\UpsertTypeAction;

final class TypeMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Type
     */
    public function upsert($_, array $args)
    {
        return UpsertTypeAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Type
     */
    public function destroy($_, array $args)
    {
        return DestroyTypeAction::execute($args);
    }

}
