<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Crear tabla en base de datos
        Schema::create('cat_productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_producto');
            $table->string('descripcion');
            $table->string('codigo_barras');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('cat_categorias');
            $table->integer('id_presentacion')->unsigned();
            $table->foreign('id_presentacion')->references('id')->on('cat_presentaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('cat_productos');
    }
}
