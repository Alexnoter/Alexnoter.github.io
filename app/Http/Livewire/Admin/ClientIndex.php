<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class ClientIndex extends Component
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
        $clients = Client::where('nombre', 'LIKE', '%' . $this->search . '%')
                                    ->latest('id')
                                    ->paginate(10);
        return view('livewire.admin.client-index', compact('clients'));
    }
}
