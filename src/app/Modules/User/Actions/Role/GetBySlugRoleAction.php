<?php

namespace App\Modules\User\Actions\Role;

use App\Modules\User\Models\Role;

final class GetBySlugRoleAction
{
    /**
     * @param $slug
     * @return Role
     */
    public static function execute($slug): Role
    {
        $role = Role::where('slug', '=', $slug)->first();

        return $role;
    }
}
