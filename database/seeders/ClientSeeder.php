<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'nombre' => 'roberto suares',
            'CI' => '12345577',
            'celular' => '22233354'
        ]);
        Client::create([
            'nombre' => 'pepe kl',
            'CI' => '99877456',
            'celular' => '56412488'
        ]);
        Client::create([
            'nombre' => 'alvez sd',
            'CI' => '879543',
            
        ]);
    }
}
