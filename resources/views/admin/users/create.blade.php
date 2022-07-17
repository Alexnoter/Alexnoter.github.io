@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Crear perfil</h1>
@stop

@section('content')
    <div class="card text-re">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.users.store', 'autocomplete' => 'off']) !!}
            
                @include('admin.users.formulario.formCE')

                {!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
                
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