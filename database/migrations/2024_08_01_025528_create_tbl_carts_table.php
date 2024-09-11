<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_carts', function (Blueprint $table) {
            $table->increments('cart_id');
            $table->integer('p_id');
            $table->integer('qty');
            $table->integer('user_id');
            $table->integer('p_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_carts');
    }
};
