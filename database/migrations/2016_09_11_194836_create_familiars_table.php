<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiar', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('parentesco',2);
            $table->integer('id_datos')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->timestamps();

            $table->foreign('id_datos')
                  ->references('id')
                  ->on('datos');

            $table->foreign('id_estudiante')
                  ->references('id')
                  ->on('estudiante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar');
    }
}
