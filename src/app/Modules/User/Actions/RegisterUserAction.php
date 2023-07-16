<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Models\User;
use App\Modules\User\DataTransferObjects\RegisterUserData;

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
