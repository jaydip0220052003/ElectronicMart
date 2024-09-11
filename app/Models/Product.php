<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'p_name',
        'p_price',
        'p_detail',
        'performance',
        'display',
        'camera',
        'battery',
        'img',
        'category_id'   
    ];
    protected $primaryKey = 'productId';

}
