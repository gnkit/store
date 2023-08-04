<?php

namespace App\Modules\User\Actions\Role;

use App\Modules\User\DataTransferObjects\RoleData;
use App\Modules\User\Models\Role;
use Illuminate\Support\Str;

final class UpsertRoleAction
{
    /**
     * @param array $args
     * @return Role
     */
    public static function execute(array $args): Role
    {
        $data = RoleData::validateAndCreate($args);
        $role = Role::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'slug' => Str::slug($data->name),
            ],
        );

        $permissions = [];
        foreach ($args['permissions'] as $permission) {
            $permissions[$permission['id']] = $permission;
        }

        $permissions = array_keys($permissions);
        $role->permissions()->sync($permissions);

        return $role;
    }
}
