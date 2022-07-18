<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $roleG = Role::create(['name' => 'Gerente']);
        $roleE = Role::create(['name' => 'Empleado']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$roleE, $roleG]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$roleG]);

        Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$roleG]);

        Permission::create(['name' => 'admin.productos.index'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.productos.create'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.productos.edit'])->syncRoles([$roleG]);
        Permission::create(['name' => 'admin.productos.destroy'])->syncRoles([$roleG]);
        
    }
}
