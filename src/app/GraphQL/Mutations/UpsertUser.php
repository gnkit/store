<?php

namespace App\GraphQL\Mutations;

use App\Modules\User\Actions\UpsertUserAction;

final class UpsertUser
{
    /**
     * @param $_
     * @param array $args
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function __invoke($_, array $args)
    {
        return UpsertUserAction::execute($args);
    }
}
