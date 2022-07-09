<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
        $reglas = [
            'nombre' => 'required',
            'slug' => 'required|unique:productos',
            'estado' => 'required|in:1,2',
        ];

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
