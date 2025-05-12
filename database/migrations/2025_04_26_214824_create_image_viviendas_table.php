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
        Schema::create('image_viviendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vivienda_id');
            $table->foreign('vivienda_id')->references('id')->on('viviendas')->onUpdate('cascade')->onDelete('no action');
            $table->string('ruta_imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_viviendas');
    }
};
