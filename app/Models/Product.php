<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'supplier_id',
        'product_name',
        'product_code',
        'baying_price',
        'selling_price',
        'root',
        'baying_date',
        'patho',
        'product_quantaty',
    ];
}
