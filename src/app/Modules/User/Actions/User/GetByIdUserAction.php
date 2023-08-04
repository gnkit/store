<?php

namespace App\Modules\User\Actions\User;

use App\Modules\User\Models\User;

final class GetByIdUserAction
{
    /**
     * @param $id
     * @return User
     */
    public static function execute($id): User
    {
        $user = User::find($id);

        return $user;
    }
}
