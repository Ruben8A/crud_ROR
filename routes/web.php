<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias','CategoriaController@index');

Route::get('/registro','CategoriaController@registro');

Route::get('/alta','CategoriaController@crearCategoria');

Route::get('/actualizar/{id}','CategoriaController@editar');

Route::get('/editar','CategoriaController@editarCategoria');

Route::get('/eliminar/{id}','CategoriaController@eliminarCategoria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
