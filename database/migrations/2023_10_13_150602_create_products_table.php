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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('sku')->nullable();
            $table->string('type')->nullable();
            $table->float('price', 11,0)->default(0);
            $table->string('quantity')->default(1);
            $table->string('option_image')->default(1);
            $table->text('photo')->nullable();
            $table->text('description')->nullable();
            $table->string('brand_id')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
