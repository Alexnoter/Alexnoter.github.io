<div>
    <div class="card">
        <div class="card-header">
            <a  class="btn btn-primary mb-3" href="{{ route('admin.users.create') }}">Crear usuario</a>
            <input wire:model="busca" class="form-control" placeholder="ingrese el nombre o correo de un usuario">
        </div>

        @if ($users->count())
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EMAIL</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                                <td with="10px">
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
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
                {{ $users->links() }}
            </div>

        @else
            
            <strong class="p-4 text-center">
                No hay registros con esas caracteristicas
            </strong>

        @endif

    </div>
</div>
