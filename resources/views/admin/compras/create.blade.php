@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Compras de Productos</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'admin.compras.store', 'autocomplete' => 'off']) !!}
    
        @livewire('admin.compras-create')

        {!! Form::submit('Crear Compra', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop