<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use  Livewire\WithPagination;

class UserIndex extends Component
{
    /* siempre que hagamos  una paginacion tenemos que importar a withPagination y usar dentro de la clase */
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $busca;

    /* esto me reseteara la paginacion para que no ahiga error en la busqueda cuando estemos en otra  pagina */
    public function updatingbusca()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->busca . '%')
                        ->orWhere('email', 'LIKE', '%' . $this->busca . '%')
                        ->paginate(10);

        return view('livewire.admin.user-index', compact('users'));
    }
}
