<?php

use Illuminate\Database\Seeder;

class DescuentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descuentos')->insert([
        	'nombre_descuento' => 'Promocion Plata',
        	'porcentaje_descuento' => 7,
        	'estatus' => 'A'
        ]);
    }
}
