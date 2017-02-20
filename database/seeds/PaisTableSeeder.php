<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->insert([
        	'nombre' => 'Venezuela',
        	'acronimo' => 'VEN',
        	'identificacion_fiscal' => 'RIF',
        	'codigo_telf' => '+58',
        	'impuestos' => '15%',
            'moneda' => 'Pesos',
        	'estatus' => 'A'
        ]);
    }
}
