<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="ingrese el nombre del usuario">
    </div>

    @if ($clients->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CI</th>
                        <th>TELEFONO</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->nombre }}</td>
                            <td>{{ $client->CI }}</td>
                            <td>{{ $client->celular }}</td>                  
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $clients->links() }}
        </div>

    @else
        
        <strong class="p-4 text-center">
            No hay registros con esas caracteristicas
        </strong>

    @endif

</div>
