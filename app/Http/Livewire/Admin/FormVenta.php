<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use App\Models\Producto;
use Livewire\Component;

class FormVenta extends Component
{
    /* public $cantidad, $preciov; */
    public $pr = 1;
    public $cantidad;

    public function render()
    {
        $productos = Producto::pluck('nombre', 'id');

        $produc = Producto::find($this->pr);


        return view('livewire.admin.form-venta', compact('productos','produc'));
    }
}
