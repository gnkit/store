<?php

namespace App\GraphQL\Mutations;
use App\Modules\User\Actions\DeleteUserAction;

final class DeleteUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return DeleteUserAction::execute($args);
    }
}
