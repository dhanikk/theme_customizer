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
        Schema::create('theme_customizer', function (Blueprint $table) {
            $table->id();
            $table->enum('layout_class')->nullable();
            $table->string('color_class')->nullable();
            $table->string('font_family_class')->nullable();
            $table->string('header_position')->nullable();
            $table->string('footer_position')->nullable();
            $table->string('sidebar_position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theme_customizer');
    }
};
