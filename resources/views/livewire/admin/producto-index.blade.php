<div class="card">

    <div class="card-body">
        <table class="table table-striped">
            
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>PRECIO</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precioVenta }}</td>
                        <td with='10px'>
                            <a  class="btn btn-primary btn-sm" href="{{ route('admin.productos.edit', $producto) }}">Editar</a>
                        </td>
                        <td with='10px'>
                            <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <div class="card-footer">
        {{ $productos->links() }}
    </div>
    
</div>
