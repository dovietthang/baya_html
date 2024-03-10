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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('header_script')->nullable();
            $table->text('footer_script')->nullable();
            $table->string('site_name')->default('App name');
            $table->string('site_logo')->nullable();
            $table->string('site_title_new')->nullable();
            $table->string('site_title_combo')->nullable();
            $table->string('site_title_filling')->nullable();
            $table->string('site_title_content')->nullable();
            $table->string('site_title_footer')->nullable();
            $table->string('site_ico')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_phone')->nullable();
            $table->string('site_mobile')->nullable();
            $table->string('site_copyright')->nullable();
            $table->text('site_info')->nullable();
            $table->integer('fee')->default(0);
            $table->integer('fee2')->default(0);
            $table->integer('freeship')->default(0);
            $table->string('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
