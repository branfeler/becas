<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $table='datos';
    protected $fillable = [
    			'nacionalidad', 
    			'cedula',
    			'primer_nombre',
    			'segundo_nombre',
    			'primer_apellido',
    			'segundo_apellido',
    			'sexo',
    			'fecha_nacimiento',
    			'lugar_nacimiento',
    			'telefono_movil',
    			'telefono_casa',
    			'direccion',
    			'ciudad',
    			'estado',
    			'codigo_postal',
    			'nivel_estudios',
    			'email',
    			'trabaja',
    			'ocupacion',
    			'salario',
    			'sosten_familia',
    			'discapacidad',
    			'descripcion_discapacidad',
    			'enfermedad',
    			'descripcion_enfermedad'
    		];
    protected $guarded = ['id'];

    public function usuario(){
        return $this->hasMany('Usuario');
    }

    public function estudiante(){
        return $this->hasMany('Estudiante');
    }

    public function personal(){
        return $this->hasMany('Personal');
    }

    public function familiar(){
        return $this->hasMany('Familiar');
    }
}
