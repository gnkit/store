<?php

namespace App\Modules\Product\DataTransferObjects;

use Spatie\LaravelData\Data;

final class CategoryData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string|null $slug
     * @param int|null $parent_id
     */
    public function __construct(
        public readonly ?int    $id,
        public readonly string  $name,
        public readonly ?string $slug,
        public readonly ?int    $parent_id,
    )
    {
    }

    /**
     * @return array[]
     */
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'integer', 'exists:categories'],
        ];
    }
}
