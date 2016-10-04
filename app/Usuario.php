<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
    protected $fillable = [
    			'username'
    		];
    protected $hidden=['pass'];
    protected $guarded = ['id'];

    public function datos(){
		return $this->belongsTo('Datos');
	}
}
