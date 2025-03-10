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
        Schema::create('spin_items', function (Blueprint $table) {
            $table->id();
            $table->integer('spin_id')->nullable();
            $table->string('text')->nullable();
            $table->string('content')->nullable();
            $table->string('message')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spin_items');
    }
};
