<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function category()
{
    return $this->belongsTo(Category::class);
}

    protected $fillable = [
        'name',
        'quantity',
        'buying_price',
        'selling_price',
        'group_id',
        'category_id',
    ];
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
}
