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
        $roleA = Role::create(['name' => 'Admin']);
        $roleG = Role::create(['name' => 'Gerente']);
        $roleE = Role::create(['name' => 'Empleado']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$roleE, $roleA, $roleG]);

        Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$roleA, $roleG]);

        Permission::create(['name' => 'admin.productos.index'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.productos.create'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.productos.edit'])->syncRoles([$roleA, $roleG]);
        Permission::create(['name' => 'admin.productos.destroy'])->syncRoles([$roleA, $roleG]);
        
    }
}
