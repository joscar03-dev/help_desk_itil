<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('incidencias', function (Blueprint $table) {
            // Cambiamos el campo 'estado_id' para que tenga un valor por defecto
            $table->unsignedBigInteger('estado_id')->default(1)->change();
        });
    }

    public function down()
    {
        Schema::table('incidencias', function (Blueprint $table) {
            // Revertir el cambio si es necesario
            $table->unsignedBigInteger('estado_id')->default(null)->change();
        });
    }
};
