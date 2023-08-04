<?php

namespace App\Modules\User\DataTransferObjects;

use Illuminate\Validation\Rules\Password;
use Spatie\LaravelData\Data;

final class RegisterUserData extends Data
{
    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    )
    {
    }

    /**
     * @return array
     */
    public static function rules(): array
    {
        return [
            'email' => ['required', 'email', 'email:rfc,dns', 'unique:users,email'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
        ];
    }
}
