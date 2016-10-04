<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{
    protected $table='vivienda';
    protected $fillable = [
    			'dispone_de_vivienda', 
    			'tipo_vivienda',
    			'tenencia'
    		];
    protected $guarded = ['id'];
}
