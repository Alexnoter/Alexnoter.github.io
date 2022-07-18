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


    public $search;

    /* esto me reseteara la paginacion para que no ahiga error en la busqueda cuando estemos en otra  pagina */
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $productos = Producto::where('nombre', 'LIKE', '%' . $this->search . '%')
                                ->latest('id')
                                ->paginate(15);

        return view('livewire.admin.producto-index', compact('productos'));
    }
}
