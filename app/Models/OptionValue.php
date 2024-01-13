<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OptionValue extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'option_id',
        'option_value_name',
    ];

    /**
     * Summary of option
     *
     * @return BelongsTo
     */
    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }
}
