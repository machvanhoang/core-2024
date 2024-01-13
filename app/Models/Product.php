<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'status_id',
    ];

    /**
     * Summary of status
     *
     * @return BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ProductStatus::class, 'status_id', 'id');
    }

    /**
     * Summary of options
     *
     * @return HasMany
     */
    public function options(): HasMany
    {
        return $this->hasMany(Option::class, 'product_id', 'id');
    }
}
