<?php

namespace App\Modules\User\Enums;

enum UserStatus: string
{
    case BAN = 'ban';
    case ACTIVE = 'active';
}
