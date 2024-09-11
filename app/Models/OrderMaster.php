<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMaster extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'order_date',
        'order_status',
        'shipping_name',
        'shipping_address',
        'shipping_mobileno',
        'payment_mode',
        'city'

    ];
}
