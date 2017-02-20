<?php

use Illuminate\Database\Seeder;

class CotizacionDetalleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cotizacion_detalle')->insert([
        	'id_cotizacion' => 1,
        	'id_item' => 1,
        	'unidades' => 1000,
        	'precio_unitario' => '890',
        	'precio_total' => '99.500',
        	'estatus' => 'A'
        ]);
    }
}
