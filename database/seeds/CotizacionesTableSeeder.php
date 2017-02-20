<?php

use Illuminate\Database\Seeder;

class CotizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cotizaciones')->insert([
        	'serial' => '0000178',
        	'impuestos' => 'N',
        	'descuento' => 'S',
        	'id_pais' => 1,
        	'id_cliente' => 1,
        	'id_asesor' => 1,
        	'id_descuento' => 1,
        	'fecha_emision' => '2017-01-25',
        	'estatus' => 'E'
        ]);
    }
}
