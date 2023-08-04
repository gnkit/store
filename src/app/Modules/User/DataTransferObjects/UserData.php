<?php

namespace App\Modules\User\DataTransferObjects;

use App\Modules\User\Enums\UserStatus;
use Spatie\LaravelData\Data;

final class UserData extends Data
{
    /**
     * @param int|null $id
     * @param string $name
     * @param string|null $firstname
     * @param string|null $lastname
     * @param string $email
     * @param string|null $phone
     * @param string|null $password
     * @param UserStatus $status
     */
    public function __construct(
        public readonly ?int       $id,
        public readonly string     $name,
        public readonly ?string    $firstname,
        public readonly ?string    $lastname,
        public readonly string     $email,
        public readonly ?string    $phone,
        public readonly ?string    $password,
        public readonly UserStatus $status,
    )
    {
    }
}
