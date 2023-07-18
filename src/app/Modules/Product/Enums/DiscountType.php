<?php

namespace App\Modules\Product\Enums;

enum DiscountType: string
{
    case SALE = 'sale';
    case NEW = 'new';
    case LIMIT = 'limit';
}
