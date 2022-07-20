<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="ingrese el nombre del usuario">
    </div>

    @if ($compras->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PERSONAL</th>
                        <th>PRECIO</th>
                        <th>PROVEEDOR</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($compras as $compra)
                        <tr>
                            <td>{{ $compra->id }}</td>
                            <td>{{ $compra->user->name }}</td>
                            <td>{{ $compra->PrecioCompra }}</td>
                            <td>{{ $compra->proveedore->nombre }}</td>
                            <td >
                                <a class="btn btn-primary" href="{{ route('admin.compras.show', $compra) }}">Ver</a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $compras->links() }}
        </div>

    @else
        
        <strong class="p-4 text-center">
            No hay registros con esas caracteristicas
        </strong>

    @endif

</div>
