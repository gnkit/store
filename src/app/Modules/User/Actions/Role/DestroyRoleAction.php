<?php

namespace App\Modules\User\Actions\Role;

use App\Modules\User\Models\Role;

final class DestroyRoleAction
{
    /**
     * @param array $args
     * @return Role
     */
    public static function execute(array $args): Role
    {
        $role = GetByIdRoleAction::execute($args['id']);
        $role->permissions()->detach();
        $role->delete();

        return $role;
    }
}
