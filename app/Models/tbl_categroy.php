<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_categroy extends Model
{
    use HasFactory;

    protected $fillable=[
        'category_name',
    ];
}
