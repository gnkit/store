<?php

namespace App\Modules\User\Actions;

final class LogoutUserAction
{
    /**
     * @param array $data
     * @return array
     */
    public static function execute(array $data)
    {
        auth()->user()->currentAccessToken()->delete();

        return [
            'status' => 'TOKEN_REVOKED',
            'message' => __('Your session has been terminated'),
        ];
    }
}
