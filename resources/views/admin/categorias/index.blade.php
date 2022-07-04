@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Listado de categoria</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a class="btn btn-secondary" href="{{ route('admin.categorias.create') }}">Agregar categoria</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categorias.edit', $categoria) }}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.categorias.destroy', $categoria) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button  type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

