<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    //

    public function index(){
    	 $categoria = DB::table('cat_categorias')->get();

        
    	return view("Categorias.mostrar_categoria", ['categorias' => $categoria]);
    }


}
