<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuario con el rol de usuario
        $usuario = User::create([
            'name' => 'usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $usuario->assignRole('usuario');

        //Usuario con el rol de administrador
        $administrador = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $administrador->assignRole('administrador');

        //Usuario con el rol de administrador
        $vendedor = User::create([
            'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $vendedor->assignRole('vendedor');
    }
}

