<?php

namespace App\Modules\User\DataTransferObjects;

use App\Modules\User\Enums\UserStatus;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public readonly ?int       $id,
        public readonly string     $name,
        public readonly string     $firstname,
        public readonly string     $lastname,
        public readonly string     $email,
        public readonly string     $phone,
        public readonly ?string    $password,
        public readonly UserStatus $status,
    )
    {
    }
}
