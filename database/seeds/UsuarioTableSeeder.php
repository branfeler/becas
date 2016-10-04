<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use app\Datos;
use app\Personal;
use app\Usuario;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Datos::create(array(
            'nacionalidad'  => 'v',
            'cedula'  => '000000000',
            'primer_nombre'  => 'admin',
            'segundo_nombre'  => 'root',
            'primer_apellido'  => 'admin',
            'segundo_apellido'  => 'root',
            'segundo_apellido'  => 'n',
            'fecha_nacimiento'  => '0000-00-00',
            'lugar_nacimiento'  => 'venezuela',
            'telefono_movil'  => '0000-00000000',
            'telefono_casa'  => '0000-00000000',
            'direccion'  => 'no definido',
            'ciudad'  => 'La Victoria',
            'estado'  => 'aragua',
            'codigo_postal' => '0000',
            'nivel_estudios'  => 'n',
            'email'  => 'admin@upta.edu.ve',
            'trabaja'  => 's',
            'salario'  => 100000.00,
            'sosten_familia'  => 's',
            'discapacidad'  => 'n',
            'descripcion_discapacidad'  => 'no aplica',
            'enfermedad'  => 'n',
            'descripcion_enfermedad'  => 'no aplica'
        ));

		Personal::create(array(
            'cargo'  => 'a',
            'status'  => 'a',
            'salario'  => 100000.00,
			'horario'  => 'c',
			'id_datos'  => 1
        ));        

        Usuario::create(array(
            'username'  => 'admin',
            'password' => Hash::make('admin'), // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
            'id_datos'  => 1
        ));
    }
}
