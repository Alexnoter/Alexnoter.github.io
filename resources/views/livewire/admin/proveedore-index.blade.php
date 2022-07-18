<div>
    <div class="card">
        <div class="card-header">
            <a  class="btn btn-primary mb-3" href="{{ route('admin.proveedores.create') }}">Crear Proveedor</a>
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre de  la empresa">
        </div>

        @if ($proveedores->count())
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>EMPRESA</th>
                            <th>TELEFONO</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedores as $proveedore)
                            <tr>
                                <td>{{ $proveedore->id }}</td>
                                <td>{{ $proveedore->nombre }}</td>
                                <td>{{ $proveedore->celular }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.proveedores.edit', $proveedore) }}">Editar</a>
                                </td>
                                <td with="10px">
                                    <form action="{{ route('admin.proveedores.destroy', $proveedore) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $proveedores->links() }}
            </div>

        @else
            
            <strong class="p-4 text-center">
                No hay registros con esas caracteristicas
            </strong>

        @endif

    </div>
</div>
