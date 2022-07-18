<?php

namespace App\Http\Livewire\Admin;

use App\Models\Proveedore;
use Livewire\Component;
use Livewire\WithPagination;

class ProveedoreIndex extends Component
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
        $proveedores = Proveedore::where('nombre', 'LIKE', '%' . $this->search . '%')
                                    ->latest('id')
                                    ->paginate(5);
        return view('livewire.admin.proveedore-index', compact('proveedores'));
    }
}
