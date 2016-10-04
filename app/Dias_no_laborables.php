<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Dias_no_laborables extends Model
{
    protected $table='dias_no_laborable';
    protected $fillable = [
    			'fecha', 
    			'titulo',
    			'descripcion'
    			
    		];
    protected $guarded = ['id'];
}
