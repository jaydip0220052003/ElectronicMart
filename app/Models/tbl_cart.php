<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_cart extends Model
{
    use HasFactory;
    protected $fillable=[

        'p_id',
        'qty',
        'user_id',
        'p_price'
    ];
}
