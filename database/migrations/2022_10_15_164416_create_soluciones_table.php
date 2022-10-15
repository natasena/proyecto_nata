<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soluciones', function (Blueprint $table) {
            $table->id();
            $table->string("id_pqrs");
            $table->date("Fecha_solucion");
            $table->string("Descripcion");
            $table->string("Estado");

            $table->foreignId('pqrs_id')->constrained('pqrs');
            $table->foreignId('empleado_id')->constrained('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solucions');
    }
};
