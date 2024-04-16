
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('pieza') }}</label>
    <div>
        {{ Form::text('pieza', $informacion->pieza, ['class' => 'form-control' .
        ($errors->has('pieza') ? ' is-invalid' : ''), 'placeholder' => 'Pieza']) }}
        {!! $errors->first('pieza', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>pieza</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('peso_teorico') }}</label>
    <div>
        {{ Form::text('peso_teorico', $informacion->peso_teorico, ['class' => 'form-control' .
        ($errors->has('peso_teorico') ? ' is-invalid' : ''), 'placeholder' => 'Peso Teorico']) }}
        {!! $errors->first('peso_teorico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>peso_teorico</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('peso_real') }}</label>
    <div>
        {{ Form::text('peso_real', $informacion->peso_real, ['class' => 'form-control' .
        ($errors->has('peso_real') ? ' is-invalid' : ''), 'placeholder' => 'Peso Real']) }}
        {!! $errors->first('peso_real', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>peso_real</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $informacion->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>estado</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('proyecto') }}</label>
    <div>
        {{ Form::text('proyecto', $informacion->proyecto, ['class' => 'form-control' .
        ($errors->has('proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto']) }}
        {!! $errors->first('proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>proyecto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('bloque') }}</label>
    <div>
        {{ Form::text('bloque', $informacion->bloque, ['class' => 'form-control' .
        ($errors->has('bloque') ? ' is-invalid' : ''), 'placeholder' => 'Bloque']) }}
        {!! $errors->first('bloque', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>bloque</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_registrio') }}</label>
    <div>
        {{ Form::text('fecha_registrio', $informacion->fecha_registrio, ['class' => 'form-control' .
        ($errors->has('fecha_registrio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registrio']) }}
        {!! $errors->first('fecha_registrio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>fecha_registrio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('registrado') }}</label>
    <div>
        {{ Form::text('registrado', $informacion->registrado, ['class' => 'form-control' .
        ($errors->has('registrado') ? ' is-invalid' : ''), 'placeholder' => 'Registrado']) }}
        {!! $errors->first('registrado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">informacion <b>registrado</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
