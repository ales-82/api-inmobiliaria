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
        Schema::create('propiedades_imagenes', function (Blueprint $table) {
            $table->id();
            $table->text('ruta_imagen');
            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id')
                ->references('id')->on('propiedades')
                ->onUpdate('cascade')
                ->onDelete('no action');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades_imagenes');
    }
};
