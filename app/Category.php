<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//ponemos el nombre de la tabla a utilizar
    protected $table = "categories";

    //ponemos el nombre del campo que utilizaremos con el json para mostrar
    protected $fillable = ['name'];

    public function articles()
    {
    	//relacion de uno a muchos se hace con hasMany
    	return $this->hasMany('App\Article');
    }

}
