<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $producto = $this->route()->parameter('producto');

        $reglas = [
            'nombre' => 'required',
            'slug' => 'required|unique:productos',
            'estado' => 'required|in:1,2',
        ];

        if ($producto) {
            $reglas['slug'] = 'required|unique:productos,slug,' . $producto->id;
        }

        if ($this->estado == 2) {
            $reglas = array_merge($reglas, [
                'stock' => 'required',
                'precioVenta' => 'required',
                'precioCompra' => 'required',
                'categoria_id' => 'required',
                'descripcion' => 'required'                
            ]);
        }
        return $reglas;
    }
}
