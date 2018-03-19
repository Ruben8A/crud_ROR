<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
     protected $table = 'cat_productos';

    protected $fillabel = ['nombre_producto','descripcion','codigo_barras','id_categoria','id_presentacion'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function presentacion(){
    	return $this->belongsTo('App\Presentacion');
    }    
}
