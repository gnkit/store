<?php

namespace App\Modules\Order\Enums;

enum PaymentStatus: string
{
    case PAID = 'paid';
    case UNPAID = 'unpaid';
    case FAILED = 'failed';
}
