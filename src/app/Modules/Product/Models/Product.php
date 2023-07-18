<?php

namespace App\Modules\Product\Models;

use Database\Factories\Modules\Product\Models\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sku',
        'type_id',
        'price',
        'stock'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    /**
     * @return ProductFactory
     */
    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
