@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    
    <h1>Compra de Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.compras.store']) !!}
            
                {!! Form::hidden('user_id', auth()->user()->id) !!}
                @livewire('admin.form-c-v')
                {!! Form::submit('comprar', ['class' => 'btn btn-primary']) !!}
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