@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Editar Proveedor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($proveedore, ['route' => ['admin.proveedores.update', $proveedore], 'autocomplete' =>  'off', 'method' => 'put'], ) !!}

                @include('admin.proveedores.formulario.form')

                {!! Form::submit('Actualizar producto', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop