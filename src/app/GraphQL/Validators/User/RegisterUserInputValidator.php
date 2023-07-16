<?php

namespace App\GraphQL\Validators\User;

use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

final class RegisterUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'email:rfc,dns', 'unique:users,email'],
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()],
        ];
    }
}
