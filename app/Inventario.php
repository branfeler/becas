<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table='inventario';
    protected $fillable = [
    			'nombre_articulo',
    			'cantidad'
    		];
    protected $guarded = ['id'];

	public function gasto_inventario(){
    	return $this->hasMany('Gasto_inventario');
	}
}
