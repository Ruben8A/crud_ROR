<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categoria;

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

    	$categoria = new Categoria;

    	$categoria->categoria = $request['categoria'];
    	$categoria->descripcion = $request['descripcion'];

    	$categoria->save();

    	return redirect('/categorias');
    }

    public function editar($id){
    	$categoria = Categoria::find($id);

    	return view('Categorias.editar_categoria',['categoria' => $categoria]);
    }

    public function editarCategoria(Request $request){

    	$categoria = Categoria::find($request['id']);

    	$categoria->categoria = $request['categoria'];
    	$categoria->descripcion = $request['descripcion'];

    	$categoria->save();

    	return redirect('/categorias');
    }

    public function eliminarCategoria($id){
    	$categoria = Categoria::find($id);

    	$categoria->delete();

    	return redirect('/categorias');
    }

}
