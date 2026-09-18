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
        Schema::table('users', function (Blueprint $table) {
            $table->string('dni')->unique()->after('username');
            $table->unsignedBigInteger('rol_id')->after('dni');
            $table->foreign('rol_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('no action');

            //$table->foreignId('rol_id')->constrained('roles')->after('dni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rol_id']);
            $table->dropColumn(['dni','rol_id']);
        });
    }
};
