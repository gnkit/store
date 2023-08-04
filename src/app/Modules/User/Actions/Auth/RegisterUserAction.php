<?php

namespace App\Modules\User\Actions\Auth;

use App\Modules\User\Actions\Role\GetBySlugRoleAction;
use App\Modules\User\DataTransferObjects\RegisterUserData;
use App\Modules\User\Enums\RoleType;
use App\Modules\User\Models\User;

final class RegisterUserAction
{
    /**
     * @param array $args
     * @return array
     */
    public static function execute(array $args)
    {
        $registerUserData = RegisterUserData::validateAndCreate($args);

        $user = User::create(
            [
                'email' => $registerUserData->email,
                'password' => $registerUserData->password,
            ],
        );

        $role = GetBySlugRoleAction::execute(RoleType::CUSTOMER->value);
        $user->roles()->attach($role->id);

        return [
            'user' => $user
        ];
    }
}
