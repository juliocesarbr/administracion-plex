<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cotizacion')->unsigned();
            $table->integer('id_item')->unsigned();
            $table->integer('unidades');
            $table->string('precio_unitario');
            $table->string('precio_total');
            $table->enum('estatus',['A','I'])->default('A');//Activo. Inactivo            
            $table->timestamps();

            $table->foreign('id_cotizacion')->references('id')->on('cotizaciones')->onDelete('cascade');
            $table->foreign('id_item')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_detalle',
            function (Blueprint $table){
            //Eliminar foraneas
            $table->dropForeign('id_cotizacion_foreign');
            $table->dropForeign('id_item_foreign');
        });
    }
}
