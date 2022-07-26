<div>
    <div class="row form-group">
        <div class="col-md-6">
            {!! Form::label('producto_id', 'Producto : ') !!}
            {!! Form::select('producto_id', $productos, null, ['class' => 'form-control',  'wire:model' => 'pr']) !!}
            
        </div>
        <div class="col-md-6">
            {!! Form::label('CI', 'Cedula ID : ') !!}
            {!! Form::text('CI', null, ['class' => 'form-control','placeholder' => 'ingrese su CI']) !!}
        </div>
        
    </div>
    <div class="row form-group">
        <div class="col-md-6">
            {!! Form::label('nombre', 'Nombre :') !!}
            {!! Form::text('nombre', null , ['class' => 'form-control' , 'placeholder' => 'ingrese su nombre']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('celular', 'Celular :') !!}
            {!! Form::text('celular', null , ['class' => 'form-control' , 'placeholder' => 'ingrese su numero de celular']) !!}
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            {!! Form::label('cantidad', 'Cantidad : ') !!}
            {!! Form::number('cantidad', null, ['class' => 'form-control', 'wire:model' => 'cantidad', 'placeholder' => '0']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::label('precioVenta', 'CostoUnidad : ') !!}
            {{-- {!! Form::number('precio', null, ['class' => 'form-control', 'readonly', 'placeholder' => '00.00']) !!} --}}
            <input class="form-control" step=".01" placeholder="00.00" readonly type="number" name="precioVenta" id="precioVenta" value="{{ $produc->precioVenta }}">
        </div>
        <div class="col-md-4">
            {!! Form::label('precio', 'total : ') !!}
            {{-- {!! Form::number('precio', null, ['class' => 'form-control', 'readonly', 'placeholder' => '00.00']) !!} --}}
            <input class="form-control" step=".01" placeholder="00.00" readonly type="number" name="precio" id="precio" value="{{ $cantidad*$produc->precioVenta }}">
        </div>
    </div> 
</div>
{{-- <div class="col-md-6">
    {!! Form::label('nombre', 'Nombre :') !!}
    
    <input type="text" name="nombre" id="nombre" value="{{ $cedulas->nombre }}" placeholder="ingrese nombre" class="form-control">
</div>
<div class="col-md-6">
    {!! Form::label('celular', 'Celular :') !!}
    
    <input type="text" name="nombre" id="nombre" value="{{ $cedulas->celular }}" placeholder="ingrese celu" class="form-control">
</div> --}}