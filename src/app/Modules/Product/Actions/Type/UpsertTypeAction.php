<?php

namespace App\Modules\Product\Actions\Type;

use App\Modules\Product\DataTransferObjects\TypeData;
use App\Modules\Product\Models\Type;
use Illuminate\Support\Str;

final class UpsertTypeAction
{
    /**
     * @param array $args
     * @return Type
     */
    public static function execute(array $args): Type
    {
        $data = TypeData::validateAndCreate($args);

        $type = Type::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'slug' => Str::slug($data->name),
            ],
        );

        return $type;
    }
}
