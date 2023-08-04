<?php

namespace App\Modules\User\Enums;

enum RoleType: string
{
    case MANAGER = 'manager';
    case CUSTOMER = 'customer';
    case SUBSCRIBER = 'subscriber';
}
