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
        Schema::create('spins', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title_1')->nullable();
            $table->string('title_2')->nullable();
            $table->string('condition')->nullable();
            $table->string('expired')->nullable();
            $table->integer('expired_num')->nullable();
            $table->text('photo')->nullable();
            $table->text('photo_icon')->nullable();
            $table->integer('show_text')->default(1);
            $table->integer('duration')->default(5);
            $table->integer('spin')->default(5);
            $table->integer('rate')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spins');
    }
};
