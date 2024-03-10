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
        Schema::create('setting2', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45)->unique();
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->string('value')->nullable();
            $table->text('description')->nullable();
            $table->text('photo')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting2');
    }
};
