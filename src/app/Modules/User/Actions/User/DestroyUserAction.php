<?php

namespace App\Modules\User\Actions\User;

use App\Modules\User\Models\User;

final class DestroyUserAction
{
    /**
     * @param array $args
     * @return User
     */
    public static function execute(array $args): User
    {
        $user = GetByIdUserAction::execute($args['id']);
        $user->roles()->detach();
        $user->delete();

        return $user;
    }
}
