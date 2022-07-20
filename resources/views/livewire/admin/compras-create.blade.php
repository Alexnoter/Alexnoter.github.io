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
                        <th>PRODUCTO</th>
                        <th>PRECIO COMPRA</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->precioCompra }}</td>
                            
                            
                            
                        </tr>
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
