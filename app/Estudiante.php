<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table='estudiante';
    protected $fillable = [
    			'estatus', 
    			'carrera'
    		];
    protected $guarded = ['id'];

    public function asistencia(){
    	return $this->hasMany('Asistencia');
	}

	public function materia(){
    	return $this->hasMany('Materia');
	}

	public function datos(){
		return $this->belongsTo('Datos');
	}

	public function vivienda(){
		return $this->belongsTo('Vivienda');
	}
}
