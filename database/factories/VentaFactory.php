<?php

namespace Database\Factories;

use App\Models\Client;
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
        $cliente = Client::all()->random();

        return [
            'PrecioVenta' => $this->faker->randomFloat(2,14.99,500),
            'user_id' => $usuario->id,
            'client_id' => $cliente->id,
        ];
    }
}
