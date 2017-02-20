<?php

use Illuminate\Database\Seeder;

class AsesorComercialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asesor_comercial')->insert([
        	'nombre' => 'Julio',
        	'apellido' => 'Blanco',
        	'correo' => 'julioblancorangel@hotmail.com',
        	'telf' => '+58 412 961 13 38',
        	'cargo' => 'Desarrollador Web',
        	'estatus' => 'A'
        ]);
    }
}
