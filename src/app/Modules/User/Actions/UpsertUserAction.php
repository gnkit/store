<?php

namespace App\Modules\User\Actions;

use App\Modules\User\DataTransferObjects\UserData;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpsertUserAction
{
    /**
     * @param array $data
     * @return array
     * @throws ValidationException
     */
    public static function execute(array $data)
    {
        $data = User::create($data);

        return $data;
    }
}
