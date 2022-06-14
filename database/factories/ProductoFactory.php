<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $nombre = $this->faker->sentence(2);

        $categoria = Categoria::all()->random();

        return [
            'nombre'=> $nombre,
            'slug' => Str::slug($nombre),
            'stock' => 15,
            'descripcion' => $this->faker->text(),
            'estado' => 2,
            'precioVenta' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'precioCompra' => $this->faker->randomElement([15.99, 35.99, 80.99]),
            'categoria_id' => $categoria->id

        ];
    }
}
