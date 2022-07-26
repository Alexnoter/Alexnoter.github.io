<?php

namespace App\Http\Livewire\Admin;

use App\Models\Producto;
use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentaIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $productos = Producto::where('estado',2)
                                ->where('nombre', 'LIKE', '%' . $this->search . '%')
                                ->latest('id')
                                ->paginate(10);

        return view('livewire.admin.venta-index', compact('productos'));
    }
}
