@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div  class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.users.update', $user],'autocomplete' =>  'off', 'method' => 'put']) !!}
        
            <div class="form-group">
                {!! Form::label('name', 'Nombre :') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese su nombre']) !!}
            
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo :') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'ingrese su correo electronico']) !!}
            
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            
            </div>
            
            <div class="form-group">
                @foreach ($roles as $rol)
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                @endforeach
            </div>

            {!! Form::submit('Actualizar producto', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
    {{-- <div class="card-body">
        <p class="h5">Nombre</p>
        <p class="form-control">{{ $user->name }}</p>

        <h2 class="h5">Listado de roles</h2>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $rol)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                        {{ $rol->name }}
                    </label>
                </div>        
            @endforeach
            {!! Form::submit('asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
        
    </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop