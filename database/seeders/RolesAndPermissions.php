<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Resetear cache de roles y permisos
        app()['cache']->forget('spatie.permission.cache');
        
        //Crear permisos
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        //Crear un rol y asignar un permiso
        $role = Role::create(['name' => 'usuario']);
        $role->givePermissionTo('update user');
        $role->givePermissionTo('read users');

        $role = Role::create(['name' => 'administrador']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'vendedor']);
        $role->givePermissionTo(Permission::all());
    }
}
