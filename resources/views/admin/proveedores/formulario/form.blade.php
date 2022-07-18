<div class="form-group">
    {!! Form::label('nombre', 'Nombre :') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'ingrese su nombre']) !!}

    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
<div class="form-group">
    {!! Form::label('celular', 'Celular :') !!}
    {!! Form::number('celular', null, ['class' => 'form-control', 'placeholder' => 'ingrese el numero de telefono']) !!}

    @error('celular')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>