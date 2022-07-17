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
    {!! Form::label('password', 'Contraseña :') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'ingrese su contraseña']) !!}

    @error('password')
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
