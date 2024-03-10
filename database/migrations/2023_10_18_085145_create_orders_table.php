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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code');
            $table->integer('user_id');
            $table->integer('customer_id');
            $table->dateTime('order_date');
            $table->float('sub_total', 11, 0);
            $table->float('total', 11, 0);
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('wards')->nullable();
            $table->string('payment_method');
            $table->string('payment_id')->nullable();
            $table->integer('status_method')->default(0);
            $table->string('messages')->nullable();
            $table->string('address')->nullable();
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
