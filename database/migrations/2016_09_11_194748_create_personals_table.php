<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('cargo',1);
            $table->string('status',1);
            $table->double('salario');
            $table->string('horario',1);
            $table->integer('id_datos')->unsigned();
            $table->timestamps();

            $table->foreign('id_datos')
                  ->references('id')
                  ->on('datos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
