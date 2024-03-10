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
        Schema::create('skus', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('sku')->nullable();
            $table->text('photo')->nullable();
            $table->float('cost', 11,0)->default(0);
            $table->float('price', 11,0)->default(0);
            $table->float('sell_price', 11, 0)->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('sub_quantity')->default(0);
            $table->integer('is_default')->default(0);
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
