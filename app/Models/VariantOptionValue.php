<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VariantOptionValue extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'variant_id',
        'option_value_id',
    ];

    /**
     * Summary of variant
     *
     * @return BelongsTo
     */
    public function variant(): BelongsTo
    {
        return $this->belongsTo(Variant::class, 'variant_id', 'id');
    }

    /**
     * Summary of optionValue
     *
     * @return BelongsTo
     */
    public function optionValue(): BelongsTo
    {
        return $this->belongsTo(OptionValue::class, 'option_value_id', 'id');
    }
}
