<?php

namespace App\Modules\User\Actions\Permission;

use App\Modules\User\DataTransferObjects\PermissionData;
use App\Modules\User\Models\Permission;
use Illuminate\Support\Str;

final class UpsertPermissionAction
{
    /**
     * @param array $args
     * @return Permission
     */
    public static function execute(array $args): Permission
    {
        $data = PermissionData::validateAndCreate($args);

        $permission = Permission::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'slug' => Str::slug($data->name),
            ],
        );

        return $permission;
    }
}
