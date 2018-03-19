<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'cat_categorias';

    protected $fillabel = ['categoria','descripcion'];

    public function productos(){
    	return $this->hasMany('App\Producto','id_categoria','id');
    }
}
