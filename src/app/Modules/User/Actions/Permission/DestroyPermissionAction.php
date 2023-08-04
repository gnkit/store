<?php

namespace App\Modules\User\Actions\Permission;

use App\Modules\User\Models\Permission;

final class DestroyPermissionAction
{
    /**
     * @param array $args
     * @return Permission
     */
    public static function execute(array $args): Permission
    {
        $permission = GetByIdPermissionAction::execute($args['id']);
        $permission->roles()->detach();
        $permission->delete();

        return $permission;
    }
}
