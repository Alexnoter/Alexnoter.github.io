<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedore;

class ProveedoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedore::create([
            'nombre' => 'Farcos',
            'celular' => '78844556'
        ]);
        Proveedore::create([
            'nombre' => 'Bágo',
            'celular' => '78812556'
        ]);
        Proveedore::create([
            'nombre' => 'Terbol',
            'celular' => '78844636'
        ]);
        Proveedore::create([
            'nombre' => 'Ifa',
            'celular' => '75144556'
        ]);
        Proveedore::create([
            'nombre' => 'Inti',
            'celular' => '79754556'
        ]);
        Proveedore::create([
            'nombre' => 'Lafar',
            'celular' => '78849761'
        ]);
        Proveedore::create([
            'nombre' => 'Cofar',
            'celular' => '64584556'
        ]);
    }
}
