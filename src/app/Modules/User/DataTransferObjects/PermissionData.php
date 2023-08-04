<?php

namespace App\Modules\User\DataTransferObjects;

use Spatie\LaravelData\Data;

final class PermissionData extends Data
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

    /**
     * @return array[]
     */
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }

}
