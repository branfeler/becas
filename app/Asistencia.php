<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $table='asistencia';
    protected $fillable = [
    			'dia', 
    			'hora',
    			'id_estudiante'
    		];
    protected $guarded = ['id'];

    public function estudiante(){
		return $this->belongsTo('Estudiante');
	}
}
