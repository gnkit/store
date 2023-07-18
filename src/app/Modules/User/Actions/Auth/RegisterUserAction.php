<?php

namespace App\Modules\User\Actions\Auth;

use App\Modules\User\DataTransferObjects\RegisterUserData;
use App\Modules\User\Models\User;

final class RegisterUserAction
{
    /**
     * @param array $data
     * @return array
     */
    public static function execute(array $data)
    {
        $registerUserData = RegisterUserData::from($data);

        $user = User::create(
            [
                'email' => $registerUserData->email,
                'password' => $registerUserData->password,
            ],
        );

        return [
            'user' => $user
        ];
    }
}
