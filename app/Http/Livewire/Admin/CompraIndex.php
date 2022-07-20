<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Compra;
use Livewire\WithPagination;

class CompraIndex extends Component
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
        $compras = Compra::where( 'PrecioCompra', 'LIKE', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate(10);

        return view('livewire.admin.compra-index', compact('compras'));
    }
}
