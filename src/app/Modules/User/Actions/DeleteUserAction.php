<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Models\User;
use Illuminate\Validation\ValidationException;

class DeleteUserAction
{
    /**
     * @param array $userId
     * @return array
     * @throws ValidationException
     */
    public static function execute(array $data)
    {
        $user = User::findOrFail($data);
        
        $user[0]->delete(); // $user is collection

        return $user[0];
    }
}
