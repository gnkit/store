<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'type',
        'start_date',
        'expiration_date',
        'product_id'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
