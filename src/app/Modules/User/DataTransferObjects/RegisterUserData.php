<?php

namespace App\Modules\User\DataTransferObjects;

use Illuminate\Support\Facades\Request;
use Spatie\LaravelData\Data;
use Illuminate\Support\Facades\Hash;

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
     * @param Request $request
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return self::from([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
