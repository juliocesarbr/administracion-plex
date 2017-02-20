<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(AsesorComercialTableSeeder::class);
        $this->call(SeccionesEstaticasTableSeeder::class);
        $this->call(DescuentosTableSeeder::class);
        $this->call(CotizacionesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(CotizacionDetalleTableSeeder::class);
    }
}
