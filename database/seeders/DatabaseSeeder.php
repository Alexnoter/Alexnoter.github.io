<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(ProveedoreSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(VentaSeeder::class);
    }
}
