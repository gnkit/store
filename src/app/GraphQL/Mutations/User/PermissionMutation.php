<?php

namespace App\GraphQL\Mutations\User;

use App\Modules\User\Actions\Permission\DestroyPermissionAction;
use App\Modules\User\Actions\Permission\UpsertPermissionAction;

final class PermissionMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\Permission
     */
    public function upsert($_, array $args)
    {
        return UpsertPermissionAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\Permission
     */
    public function destroy($_, array $args)
    {
        return DestroyPermissionAction::execute($args);
    }
}
