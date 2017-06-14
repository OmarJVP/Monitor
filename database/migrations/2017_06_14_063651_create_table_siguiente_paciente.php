<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiguientePaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siguiete_paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paciente');
            $table->string('consultorio');
            $table->string('expediente');
            $table->string('visita');
            $table->string('estatus');
            $table->string('etapa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siguiete_paciente');
    }
}
