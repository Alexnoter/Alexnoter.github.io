<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Proveedore;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compra>
 */
class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $usuario = User::all()->random();
        $proveedore = Proveedore::all()->random();
        $producto = Producto::all()->random();
        $cantidad = $this->faker->randomElement([1,2,3,4]);
        $precio = $this->faker->randomFloat(2 , 15 , 99);

        return [
            'cantidad'  => $cantidad,
            'precio' => $precio,
            'PrecioCompra' => $cantidad * $precio,
            'user_id' => $usuario->id,
            'proveedore_id' => $proveedore->id,
            'producto_id' => $producto

        ];
    }
}
