<?php

namespace App\GraphQL\Validators;

use App\Modules\User\Enums\UserStatus;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;
use Nuwave\Lighthouse\Validation\Validator;

final class UpsertUserInputValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'id' => ['sometimes'],
            'name' => ['string', 'max:255'],
            'firstname' => ['nullable', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'email' => ['sometimes', 'email', 'email:rfc,dns', Rule::unique('users', 'email')->ignore($this->arg('id'), 'id'),
            ],
            'phone' => ['nullable', 'string', 'max:11'],
            'password' => ['sometimes', Password::min(8)->mixedCase()->numbers()->symbols()],
            'status' => ['sometimes', new Enum(UserStatus::class)],
        ];
    }
}
