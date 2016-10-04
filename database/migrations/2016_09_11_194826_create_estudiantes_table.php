<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('status',1);
            $table->string('carrera',100);
            $table->integer('id_datos')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->integer('id_vivienda')->unsigned();
            $table->timestamps();

            $table->foreign('id_datos')
                  ->references('id')
                  ->on('datos');

            $table->foreign('id_materia')
                  ->references('id')
                  ->on('materia');

            $table->foreign('id_vivienda')
                  ->references('id')
                  ->on('vivienda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
