<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    use HasFactory;

    /**
     * Summary of table
     *
     * @var string
     */
    protected $table = 'product_status';

    /**
     * Summary of fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'sort'
    ];
}
