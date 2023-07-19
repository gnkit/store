<?php

namespace App\Modules\Product\Actions\Type;

use App\Modules\Product\Models\Type;

final class DestroyTypeAction
{
    /**
     * @param array $args
     * @return Type
     */
    public static function execute(array $args): Type
    {
        $type = Type::find($args['id']);
        $type->delete();

        return $type;
    }
}
