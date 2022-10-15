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
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();
            $table->string("id_empresa");
            $table->integer("id_persona");
            $table->string("id_tipo");
            $table->date("Fecha_radicacion");
            $table->date("Fecha_solucion");
            $table->string("Descripción");
            $table->string("Estado");

            $table->foreignId('tipopqrs_id')->constrained('tipopqrs');
            $table->foreignId('empresa_id')->constrained('empresas');
            $table->foreignId('cliente_id')->constrained('clientes');
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
        Schema::dropIfExists('pqrs');
    }
};
