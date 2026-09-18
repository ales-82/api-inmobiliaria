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
        Schema::create('operaciones', function (Blueprint $table) {
            $table->id();

            //Relacion "adquiere": el cliente que compra/alquila
            $table->unsignedBigInteger('usuario_cliente_id');
            $table->foreign('usuario_cliente_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            //Relacion "gestiona": el agente que gestiona la operacion
            $table->unsignedBigInteger('usuario_agente_id');
            $table->foreign('usuario_agente_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('no action');

            //Relacion con propiedad
            $table->unsignedBigInteger('propiedad_id');
            $table->foreign('propiedad_id')
                ->references('id')->on('propiedades')
                ->onUpdate('cascade')
                ->onDelete('no action');

            $table->enum('tipo',['venta','alquilar']);
            $table->decimal('precio',12,2);
            $table->date('fecha');
            $table->string('estado');
            $table->text('observaciones')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operaciones');
    }
};
