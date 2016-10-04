<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nacionalidad', 1);
            $table->string('cedula', 15)->unique();
            $table->string('priner_nombre', 15);
            $table->string('segundo_nombre', 15);
            $table->string('primer_apellido', 15);
            $table->string('segundo_apellido', 15);
            $table->string('sexo', 1);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento', 250);
            $table->text('telefono_movil');
            $table->text('telefono_casa');
            $table->string('direccion', 150);
            $table->string('ciudad', 60);
            $table->string('estado', 50);
            $table->string('codigo_postal', 4);
            $table->string('nivel_estudios', 1);
            $table->string('email', 100);
            $table->string('trabaja', 1);
            $table->string('ocupacion', 100);
            $table->double('salario');
            $table->string('sosten_familia', 1);
            $table->string('discapacidad', 1);
            $table->string('descripcion_discapacidad', 250);
            $table->string('enfermedad', 1);
            $table->string('descripcion_enfermedad', 250);
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
        Schema::dropIfExists('datos');
    }
}
