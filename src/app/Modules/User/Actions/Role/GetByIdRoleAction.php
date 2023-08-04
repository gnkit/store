<?php

namespace App\Modules\User\Actions\Role;

use App\Modules\User\Models\Role;

final class GetByIdRoleAction
{
    /**
     * @param $id
     * @return Role
     */
    public static function execute($id): Role
    {
        $role = Role::find($id);

        return $role;
    }
}
