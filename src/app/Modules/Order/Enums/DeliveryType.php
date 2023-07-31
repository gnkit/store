<?php

namespace App\Modules\Order\Enums;

enum DeliveryType: string
{
    case EXPRESS = 'express';
    case SELF = 'self';
}
