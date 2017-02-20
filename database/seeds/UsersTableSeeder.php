<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Miguel Correa',
        	'email' => 'miguel.correa.dg@gmail.com',
        	'password' => \Hash::make('123')
        ]);
    }
}
