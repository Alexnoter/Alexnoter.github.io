<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Producto;

use Livewire\WithPagination;

class ProductoIndex extends Component
{

    use WithPagination;
    
    /* esto sera  para que use los estilos de broostrap la paginacion*/
    protected $paginationTheme = "bootstrap";



    public function render()
    {
        $productos = Producto::where('id', '>', 0)->latest('id')->paginate(15);

        return view('livewire.admin.producto-index', compact('productos'));
    }
}
