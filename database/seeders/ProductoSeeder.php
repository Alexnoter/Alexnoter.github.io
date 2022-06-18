<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::factory(100)->create()->each(function(Producto $product){
            Image::factory(4)->create([
                'imageable_id'=> $product->id,
                'imageable_type' => Producto::class
            ]);
        });
        /* $products =  Producto::factory(10)->create();

        foreach ($products as $product) {
            Image::factory(1)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Producto::class
            ]);
        } */
    }
}
