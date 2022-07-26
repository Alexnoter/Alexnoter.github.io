<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="ingrese el nombre del usuario">
    </div>

    @if ($ventas->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PERSONAL</th>
                        <th>COSTO</th>
                        <th>CANT</th>
                        
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->user->name }}</td>
                            <td>{{ $venta->precio }}</td>
                            <td>{{ $venta->cantidad }}</td>
                    
                            <td >
                                <a class="btn btn-primary" href="{{ route('admin.ventas.show', $venta) }}">Ver</a>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $ventas->links() }}
        </div>

    @else
        
        <strong class="p-4 text-center">
            No hay registros con esas caracteristicas
        </strong>

    @endif

</div>