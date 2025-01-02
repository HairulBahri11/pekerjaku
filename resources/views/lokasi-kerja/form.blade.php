<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pekerja_id" class="form-label">{{ __('Pekerja Id') }}</label>
            <input type="text" name="pekerja_id" class="form-control @error('pekerja_id') is-invalid @enderror" value="{{ old('pekerja_id', $lokasiKerja?->pekerja_id) }}" id="pekerja_id" placeholder="Pekerja Id">
            {!! $errors->first('pekerja_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kota" class="form-label">{{ __('Kota') }}</label>
            <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ old('kota', $lokasiKerja?->kota) }}" id="kota" placeholder="Kota">
            {!! $errors->first('kota', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="provinsi" class="form-label">{{ __('Provinsi') }}</label>
            <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ old('provinsi', $lokasiKerja?->provinsi) }}" id="provinsi" placeholder="Provinsi">
            {!! $errors->first('provinsi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>