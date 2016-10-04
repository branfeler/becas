<?php

namespace sisdbe;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model
{
    protected $table='users';
    protected $fillable = [
    			'username'
    		];
    protected $hidden=['pass'];
    protected $guarded = ['id'];

    public function datos(){
		return $this->belongsTo('Datos');
	}
}