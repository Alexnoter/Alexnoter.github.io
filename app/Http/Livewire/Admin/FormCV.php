<?php

namespace App\Http\Livewire\Admin;

use App\Models\Producto;
use App\Models\Proveedore;
use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\WithPagination;

class FormCV extends Component
{
    public $cantidad , $precio ;


    /* public function total()
    {
        $total = $this->cantidad + $this->precio;
        return  $total;
    } */

    public function render()
    {
        $productos = Producto::pluck('nombre', 'id');
        $proveedores = Proveedore::pluck('nombre', 'id');

        return view('livewire.admin.form-c-v', compact('productos','proveedores'));
    }
}
