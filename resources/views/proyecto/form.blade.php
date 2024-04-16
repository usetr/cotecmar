
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre_proyecto') }}</label>
    <div>
        {{ Form::text('nombre_proyecto', $proyecto->nombre_proyecto, ['class' => 'form-control' .
        ($errors->has('nombre_proyecto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Proyecto']) }}
        {!! $errors->first('nombre_proyecto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">proyecto <b>nombre_proyecto</b> instruction.</small>
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
