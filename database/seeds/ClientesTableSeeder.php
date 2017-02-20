<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        	'nombre' => 'Julio Blanco',
        	'telefono' => '4129611338',
        	'email' => 'julioblancorangel@hotmail.com',
        	'direccion' => 'Guatire',
        	'id_pais' => '1',
        	'estatus' => 'A'
        ]);
    }
}
