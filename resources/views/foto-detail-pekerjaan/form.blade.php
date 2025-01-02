<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pekerja_id" class="form-label">{{ __('Pekerja Id') }}</label>
            <input type="text" name="pekerja_id" class="form-control @error('pekerja_id') is-invalid @enderror" value="{{ old('pekerja_id', $fotoDetailPekerjaan?->pekerja_id) }}" id="pekerja_id" placeholder="Pekerja Id">
            {!! $errors->first('pekerja_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto" class="form-label">{{ __('Foto') }}</label>
            <input type="text" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto', $fotoDetailPekerjaan?->foto) }}" id="foto" placeholder="Foto">
            {!! $errors->first('foto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>