<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias =  [
            [
                'nombre' => 'Alimentos y bebidas',
                'slug' => Str::slug('Alimentos y bebidas')
            ],
            [
                'nombre' => 'Medicamentos',
                'slug' => Str::slug('Medicamentos')
            ],
            [
                'nombre' => 'Hogar',
                'slug' => Str::slug('Hogar')
            ],
            [
                'nombre' => 'Bienestar y deporte',
                'slug' => Str::slug('Bienestar y deporte')
            ],
            [
                'nombre' => 'Cuidado Personal',
                'slug' => Str::slug('Cuidado Personal')
            ],
        ];
        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
