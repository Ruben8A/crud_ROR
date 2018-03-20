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


    public function registro(){
    	return view("Categorias.alta_categoria");
    }

    public function crearCategoria(Request $request){

    	$categoria = new App\Categoria;

    	$categoria->categoria = $request['categoria'];
    	$categoria->descripcion = $request['descripcion'];

    	$categoria->save();

    	return redirect('/categorias');
    }
}
