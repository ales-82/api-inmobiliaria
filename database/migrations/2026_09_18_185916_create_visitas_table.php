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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();

            //Relacion "solicita": el client que pide la visita
            $table->unsignedBigInteger('usuario_cliente_id');
            $table->foreign('usuario_cliente_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            //Relacion "atiende": el agente que le va a atender
            $table->unsignedBigInteger('usuario_agente_id');
            $table->foreign('usuario_agente_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            //Relacion con propiedad:
            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id')
                ->references('id')->on('propiedades')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->date('fecha');
            $table->time('hora');
            $table->text('observaciones')->nullable();
            $table->enum('estado',['pendiente','realizada','cancelada']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
