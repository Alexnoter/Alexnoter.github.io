@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Lista de Compras</h1>
@stop

@section('content')

    {{ $compra->PrecioCompra }}
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop