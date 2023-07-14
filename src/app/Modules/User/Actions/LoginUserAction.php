<?php

namespace App\Modules\User\Actions;

use App\Modules\User\DataTransferObjects\UserData;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginUserAction
{
    /**
     * @param array $data
     * @return array
     * @throws ValidationException
     */
    public static function execute(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('graphql')->plainTextToken;

        return $token;
    }
}
