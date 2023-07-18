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
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }
}
