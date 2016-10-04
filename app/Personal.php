<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table='personal';
    protected $fillable = [
    			'cargo', 
    			'status',
    			'saladio',
    			'horario'
    		];
    protected $guarded = ['id'];

    public function datos(){
		return $this->belongsTo('Datos');
	}
}
