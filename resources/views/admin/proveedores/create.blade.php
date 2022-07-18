@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Crear un nuevo proveedor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open([ 'route' => 'admin.proveedores.store', 'autocomplete' => 'off']) !!}

                @include('admin.proveedores.formulario.form')

                {!! Form::submit('Crear proveedor', ['class' => 'btn btn-primary']) !!}

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