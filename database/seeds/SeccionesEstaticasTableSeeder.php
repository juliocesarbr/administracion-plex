<?php

use Illuminate\Database\Seeder;

class SeccionesEstaticasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secciones_estaticas')->insert([
        	'descripcion' => 'Condiciones de la Venta',
        	'contenido' => 'Acá va un texto full largo que explica a detalle bla bla bla',
        	'id_pais' => '1',
        	'estatus' => 'A'
        ]);
    }
}
