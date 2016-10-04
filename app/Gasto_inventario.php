<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Gasto_inventario extends Model
{
    protected $table='gasto_inventario';
    protected $fillable = [
    			'nombre_articulo', 
    			'cantidad',
    			'fecha_gasto'
    		];
    protected $guarded = ['id'];

    public function inventario(){
		return $this->belongsTo('Inventario');
	}
}
