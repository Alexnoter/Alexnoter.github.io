@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Listado de productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @else
        @if (session('borrador'))
            <div class="alert alert-warning">
                <strong>{{ session('borrador') }}</strong>
            </div>
        @endif
    @endif
    @if (session('delete'))
            <div class="alert alert-danger">
                <strong>{{ session('delete') }}</strong>
            </div>
        @endif
    @livewire('admin.producto-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop