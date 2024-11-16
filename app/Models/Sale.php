<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function Products()
    {
        return $this->belongsTo(Products::class);
    }

    protected $fillable = [
        'name',
        'total',
        'quantity',
        'group_id',
        'products_id',
    ];
}
