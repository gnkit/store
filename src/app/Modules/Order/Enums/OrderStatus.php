<?php

namespace App\Modules\Order\Enums;

enum OrderStatus: string
{
    case OPEN = 'open';
    case CONFIRMED = 'confirmed';
    case CANCELED = 'canceled';
    case COMPLETED = 'completed';
}
