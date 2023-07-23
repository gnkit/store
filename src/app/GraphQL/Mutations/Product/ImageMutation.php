<?php

namespace App\GraphQL\Mutations\Product;

use App\Modules\Product\Actions\Image\DestroyImageAction;
use App\Modules\Product\Actions\Image\UpsertImageAction;

final class ImageMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Image
     */
    public function upsert($_, array $args)
    {
        return UpsertImageAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\Product\Models\Image
     */
    public function destroy($_, array $args)
    {
        return DestroyImageAction::execute($args);
    }

}
