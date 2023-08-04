<?php

namespace App\Modules\User\Actions\Permission;

use App\Modules\User\Models\Permission;

final class GetByIdPermissionAction
{
    /**
     * @param $id
     * @return Permission
     */
    public static function execute($id): Permission
    {
        $permission = Permission::find($id);

        return $permission;
    }
}
