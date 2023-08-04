<?php

namespace App\Modules\User\Actions\User;

use App\Modules\User\DataTransferObjects\UserData;
use App\Modules\User\Models\User;
use App\Modules\User\Services\User\UserService;

final class UpsertUserAction
{
    /**
     * @param array $args
     * @return User
     */
    public static function execute(array $args): User
    {
        $data = UserData::validateAndCreate($args);
        $user = User::updateOrCreate(
            [
                'id' => $data->id,
            ],
            [
                'name' => $data->name,
                'firstname' => $data->firstname,
                'lastname' => $data->lastname,
                'email' => $data->email,
                'phone' => $data->phone,
                'password' => $data->password,
                'status' => $data->status,
            ],
        );

        (new UserService())->syncPivotWithoutParams($user, $args['roles'], 'roles');

        return $user;
    }
}
