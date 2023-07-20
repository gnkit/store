<?php

namespace App\Modules\Product\Actions\Discount;

use App\Modules\Product\DataTransferObjects\DiscountData;
use App\Modules\Product\Models\Discount;

final class UpsertDiscountAction
{
    /**
     * @param array $args
     * @return Discount
     */
    public static function execute(array $args): Discount
    {
        $data = DiscountData::validateAndCreate($args);

        $discount = Discount::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'value' => $data->value,
                'type' => $data->type,
                'start_date' => $data->start_date,
                'expiration_date' => $data->expiration_date,
            ],
        );

        return $discount;
    }
}
