<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected $table='familiar';
    protected $fillable = [
    			'parentesco'
    		];
    protected $guarded = ['id'];

    public function datos(){
		return $this->belongsTo('Datos');
	}

	public function estudiante(){
		return $this->belongsTo('Estudiante');
	}
}
