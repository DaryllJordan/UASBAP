<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($bestseller->nama) ? $bestseller->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun') ? 'has-error' : ''}}">
    <label for="tahun" class="control-label">{{ 'Tahun' }}</label>
    <input class="form-control" name="tahun" type="text" id="tahun" value="{{ isset($bestseller->tahun) ? $bestseller->tahun : ''}}" >
    {!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
