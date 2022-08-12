<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $expedient->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $expedient->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}

        </div>
        <div class="form-group">
            {{ Form::label('procedemiento') }}
            {{ Form::text('procedemiento', $expedient->procedemiento, ['class' => 'form-control' . ($errors->has('procedemiento') ? ' is-invalid' : ''), 'placeholder' => 'Procedemiento']) }}
            {!! $errors->first('procedemiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('organismo') }}
            {{ Form::text('organismo', $expedient->organismo, ['class' => 'form-control' . ($errors->has('organismo') ? ' is-invalid' : ''), 'placeholder' => 'Organismo']) }}
            {!! $errors->first('organismo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empleado') }}
            {{ Form::text('empleado', $expedient->empleado, ['class' => 'form-control' . ($errors->has('empleado') ? ' is-invalid' : ''), 'placeholder' => 'Empleado']) }}
            {!! $errors->first('empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::text('archivo', $expedient->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $expedient->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fase') }}
            {{ Form::text('fase', $expedient->fase, ['class' => 'form-control' . ($errors->has('fase') ? ' is-invalid' : ''), 'placeholder' => 'Fase']) }}
            {!! $errors->first('fase', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
