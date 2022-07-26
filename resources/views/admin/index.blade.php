@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>inventario</h1>
@stop

@section('content')
    @livewire('admin.venta-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop