<?php

namespace App\Http\Livewire\Admin;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class HistorialVenta extends Component
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
        $ventas = Venta::where( 'precio', 'LIKE', '%' . $this->search . '%')
                            ->orWhere('producto_id', 'LIKE ', '%' . $this->search . '%' )
                            ->latest('id')
                            ->paginate(10);
        return view('livewire.admin.historial-venta', compact('ventas'));
    }
}
