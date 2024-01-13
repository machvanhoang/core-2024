<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Variant extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'code',
        'inventory',
        'photo',
        'regular_price',
        'sale_price',

    ];

    /**
     * Summary of product
     *
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
