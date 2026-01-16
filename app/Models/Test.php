<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'original_price',
        'current_price',
        'discount_percentage',
        'image_url',
        'product_id',
        'sku',
        'url',
    ];
}
