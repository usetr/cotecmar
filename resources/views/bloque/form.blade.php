
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_bloque') }}</label>
    <div>
        {{ Form::text('nombre_bloque', $bloque->nombre_bloque, ['class' => 'form-control' .
        ($errors->has('nombre_bloque') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Bloque']) }}
        {!! $errors->first('nombre_bloque', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">bloque <b>nombre_bloque</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('proyecto') }}</label>
    <div>
        {{ Form::text('proyecto', $bloque->proyecto, ['class' => 'form-control' .
        ($errors->has('proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Proyecto']) }}
        {!! $errors->first('proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">bloque <b>proyecto</b> instruction.</small>
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
