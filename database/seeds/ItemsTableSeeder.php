<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	'nombre' => 'Tarjetas de Presentación',
        	'descripcion' => 'Realizadas en Propalcote 300gr con reserva UV',
        	'estatus' => 'A'
        ]);
    }
}
