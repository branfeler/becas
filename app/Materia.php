<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table='materia';
    protected $fillable = [
    			'nombre'
    		];
    protected $guarded = ['id'];

    public function calificacion(){
    	return $this->hasMany('Calificacion');
	}

	public function estudiante(){
		return $this->belongsTo('Estudiante');
	}
}
