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
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id();
            $table->string('direccion',255)->unique();
            $table->text('descripcion')->nullable();
            $table->string('barrio',255);
            $table->string('ciudad',255);
            $table->string('provincia',255);
            $table->integer('cantidad_ambientes');
            $table->integer('habitaciones')->nullable();
            $table->integer('baño');
            $table->integer('superficie');
            $table->enum('tipo',['casa','departamento']);            
            $table->enum('estado',['disponible','vendida','reservada']);
            $table->decimal('precio',10,2);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viviendas');
    }
};
