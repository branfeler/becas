<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table='calificacion';
    protected $fillable = [
    			'calificacion'
    		];
    protected $guarded = ['id'];

    public function materia(){
		return $this->belongsTo('Materia');
	}
}
