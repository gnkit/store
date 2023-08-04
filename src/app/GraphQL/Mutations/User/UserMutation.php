<?php

namespace App\GraphQL\Mutations\User;

use App\Modules\User\Actions\User\DestroyUserAction;
use App\Modules\User\Actions\User\UpsertUserAction;

final class UserMutation
{
    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\User
     */
    public function upsert($_, array $args)
    {
        return UpsertUserAction::execute($args);
    }

    /**
     * @param $_
     * @param array $args
     * @return \App\Modules\User\Models\User
     */
    public function destroy($_, array $args)
    {
        return DestroyUserAction::execute($args);
    }
}
