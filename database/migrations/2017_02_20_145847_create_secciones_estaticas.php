<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesEstaticas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones_estaticas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');//Condiciones de la venta, Nota
            $table->text('contenido');
            $table->integer('id_pais')->unsigned();
            $table->enum('estatus', ['A','I'])->default('A');//Activo, Inactivo
            $table->timestamps();
            $table->foreign('id_pais')->references('id')->on('pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secciones_estaticas', function (Blueprint $table){
            //Eliminar foraneas
            $table->dropForeign('id_pais_foreign');
        });
    }
}
