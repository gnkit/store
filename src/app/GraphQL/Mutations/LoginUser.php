<?php

namespace App\GraphQL\Mutations;

use App\Modules\User\Actions\LoginUserAction;

final class LoginUser
{
    /**
     * @param $_
     * @param array $args
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke($_, array $args)
    {
        return LoginUserAction::execute($args);
    }
}
