<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $usuario = User::all()->random();
        $client = Client::all()->random();
        $producto = Producto::all()->random();
        $cantidad = $this->faker->randomElement([1,2,3,4,5,6]);
        

        return [
            'cantidad'  => $cantidad,
            
            'precio' => $cantidad * $producto->precioVenta,
            'user_id' => $usuario->id,
            'client_id' => $client->id,
            'producto_id' => $producto->id
        ];
    }
}
