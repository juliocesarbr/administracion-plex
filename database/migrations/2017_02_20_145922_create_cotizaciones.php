<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial');
            $table->enum('impuestos', ['S','N']);//Si o No
            $table->enum('descuento', ['S','N']);//Si o No
            $table->integer('id_pais')->unsigned();
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_asesor')->unsigned();
            $table->integer('id_descuento')->unsigned();
            $table->date('fecha_emision');
            $table->enum('estatus', ['A','R','E'])->default('E');//Aprobada, Rechazada, En Espera
            $table->timestamps();

            $table->foreign('id_pais')->references('id')->on('pais')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_asesor')->references('id')->on('asesor_comercial')->onDelete('cascade');
            $table->foreign('id_descuento')->references('id')->on('descuentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizaciones', function (Blueprint $table){
            //Eliminar foraneas
            $table->dropForeign('id_pais_foreign');
            $table->dropForeign('id_cliente_foreign');
            $table->dropForeign('id_asesor_foreign');
            $table->dropForeign('id_descuento_foreign');
        });
    }
}
