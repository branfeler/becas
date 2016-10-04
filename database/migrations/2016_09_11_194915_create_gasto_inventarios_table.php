<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastoInventariostable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasto_inventario', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre_articulo',100);
            $table->integer('cantidad');
            $table->date('fecha_gasto');
            $table->integer('id_inventario')->unsigned();
            $table->timestamps();

            $table->foreign('id_inventario')
                  ->references('id')
                  ->on('inventario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gasto_inventario');
    }
}
