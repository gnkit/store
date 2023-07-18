<?php

namespace App\Modules\Product\Models;

use Database\Factories\Modules\Product\Models\TypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }

    /**
     * @return TypeFactory
     */
    protected static function newFactory()
    {
        return TypeFactory::new();
    }
}
