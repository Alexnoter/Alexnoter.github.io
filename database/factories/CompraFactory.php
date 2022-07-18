<?php

namespace Database\Factories;

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

        return [
            
            'PrecioCompra' => $this->faker->randomFloat(2,100,2000),
            'user_id' => $usuario->id,
            'proveedore_id' => $proveedore->id,

        ];
    }
}
