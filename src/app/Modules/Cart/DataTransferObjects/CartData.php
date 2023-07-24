<?php

namespace App\Modules\Cart\DataTransferObjects;

use Spatie\LaravelData\Data;

final class CartData extends Data
{
    /**
     * @param int|null $id
     * @param string|null $session_id
     * @param int $user_id
     */
    public function __construct(
        public readonly ?int    $id,
        public readonly ?string $session_id,
        public readonly int     $user_id,
    )
    {
    }

    /**
     * @return array[]
     */
    public static function rules(): array
    {
        return [
            'session_id' => ['nullable', 'sometimes', 'string'],
            'user_id' => ['required', 'nullable', 'integer', 'exists:users,id'],
        ];
    }
}
