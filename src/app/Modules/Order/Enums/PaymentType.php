<?php

namespace App\Modules\Order\Enums;

enum PaymentType: string
{
    case CASH = 'cash';
    case CARD = 'card';
    case QR = 'qr';
}
