<?php

namespace App\GraphQL\Mutations\User;

use App\Modules\User\Actions\LoginUserAction;
use App\Modules\User\Actions\LogoutUserAction;
use App\Modules\User\Actions\RegisterUserAction;

final class AuthMutation
{
    /**
     * @param $_
     * @param array $args
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login($_, array $args)
    {
        return LoginUserAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return array
     */
    public function logout($_, array $args)
    {
        return LogoutUserAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return array
     */
    public function register($_, array $args)
    {
        return RegisterUserAction::execute($args);
    }

}
