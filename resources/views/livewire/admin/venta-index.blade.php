<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del producto">
    </div>

    @if ($productos->count())

        <div class="card-body">
            <table class="table table-striped">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>PRECIO VENTA</th>
                        
                        <th>STOCK</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        @if ($producto->estado == 2)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->precioVenta }}</td>
                                
                                <td>{{ $producto->stock }}</td>
                                <td with='10px'>
                                    <a  class="btn btn-primary btn-sm" href="{{ route('admin.productos.show', $producto) }}">ver</a>
                                </td>
                                
                            </tr>
                        @endif
                    @endforeach
                </tbody>

            </table>
        </div>

        <div class="card-footer">
            {{ $productos->links() }}
        </div>
    @else
        <strong class="p-5 text-center ">
            No hay ningun producto con ese nombre....
        </strong>
    @endif

    
</div>
