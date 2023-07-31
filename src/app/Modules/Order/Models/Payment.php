<?php

namespace App\Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
    ];

    /**
     * @return BelongsToMany
     */
    public function orders(): BelongsToMany
    {
        return $this->BelongsToMany(Order::class, 'orders_payments', 'payment_id');
    }
}
