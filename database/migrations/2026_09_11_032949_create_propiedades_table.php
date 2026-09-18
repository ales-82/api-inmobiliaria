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
        Schema::create('propiedades', function (Blueprint $table) {
             $table->id();

            $table->string('direccion');
            $table->text('descripcion')->nullable();
            $table->string('barrio')->nullable();
            $table->string('ciudad');
            $table->string('provincia');
            $table->integer('cantidad_ambientes');
            $table->integer('habitaciones')->nullable();
            $table->integer('baño');
            $table->decimal('superficie',8,2);
            $table->enum('tipo',['casa','departamento']);
            $table->enum('estado',['disponible','vendida','reservada']);
            $table->decimal('precio',12, 2);            

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')
                ->references('id')->on('users')
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
        Schema::dropIfExists('propiedades');
    }
};
