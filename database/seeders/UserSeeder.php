<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* importamos al modelo user */
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'alexander velarde',
            'email' => 'a@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        User::create([
            'name' => 'ajake',
            'email' => 'aj@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Empleado');
        User::create([
            'name' => 'pedro',
            'email' => 'ap@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Gerente');
        User::factory(10)->create();
    }
}
