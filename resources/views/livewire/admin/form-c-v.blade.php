<div>
    <div class="row form-group">
        <div class="col-md-6">
            {!! Form::label('producto_id', 'Producto : ') !!}
            {!! Form::select('producto_id', $productos, null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('proveedore_id', 'Proveedor  : ') !!}
            {!! Form::select('proveedore_id', $proveedores, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-4">
            {!! Form::label('cantidad', 'Cantidad : ') !!}
            {!! Form::number('cantidad', null, ['class' => 'form-control', 'wire:model' => 'cantidad', 'placeholder' => '0']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::label('precio', 'Precio : ') !!}
            {!! Form::number('precio', null, ['class' => 'form-control', 'step' => '.01', 'wire:model' => 'precio', 'placeholder' => '00,00']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::label('PrecioCompra', 'total : ') !!}
            {{-- {!! Form::number('PrecioCompra', null, ['class' => 'form-control', 'readonly', 'placeholder' => '00.00']) !!} --}}
            <input class="form-control" step=".01" placeholder="00.00" readonly type="number" name="PrecioCompra" id="PrecioCompra" value="{{ $precio*$cantidad }}">
        </div>
    </div>
</div>