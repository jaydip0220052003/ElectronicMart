<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_order_details extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_details_id',
        'ordermaster_id',
        'p_id',
        'p_price',
        'user_id'
    ];
}
