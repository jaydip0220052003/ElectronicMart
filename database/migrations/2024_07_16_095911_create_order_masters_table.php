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
        Schema::create('order_masters', function (Blueprint $table) {
            $table->id('ordermaster_id');
            $table->integer('user_id');
            $table->string('order_date');
            $table->string('shipping_name');
            $table->string('order_status');
            $table->string('shipping_address');
            $table->string('shipping_mobileno');
            $table->string('payment_mode');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_masters');
    }
};
