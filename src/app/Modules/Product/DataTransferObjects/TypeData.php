<?php

namespace App\Modules\Product\DataTransferObjects;

use Spatie\LaravelData\Data;

final class TypeData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string|null $slug
     */
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $slug,
    )
    {
    }
}
