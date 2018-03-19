<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    //
     protected $table = 'cat_presentaciones';

    protected $fillabel = ['presentacion','descripcion'];

    public function productos(){
    	return $this->hasMany('App\Producto','id_presentacion','id');
    }
}
