<?php

namespace App\GraphQL\Mutations\User;

use App\Modules\User\Actions\Role\DestroyRoleAction;
use App\Modules\User\Actions\Role\UpsertRoleAction;

final class RoleMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\Role
     */
    public function upsert($_, array $args)
    {
        return UpsertRoleAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\Role
     */
    public function destroy($_, array $args)
    {
        return DestroyRoleAction::execute($args);
    }
}
