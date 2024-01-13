<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'option_name'
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

    /**
     * Summary of optionValues
     *
     * @return HasMany
     */
    public function optionValues(): HasMany
    {
        return $this->hasMany(OptionValue::class, 'option_id', 'id');
    }
}
