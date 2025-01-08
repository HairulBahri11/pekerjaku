<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pekerja_id" class="form-label">{{ __('Pekerja Id') }}</label>
            <input type="text" name="pekerja_id" class="form-control @error('pekerja_id') is-invalid @enderror" value="{{ old('pekerja_id', $fileBerkasPekerja?->pekerja_id) }}" id="pekerja_id" placeholder="Pekerja Id">
            {!! $errors->first('pekerja_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_berkas" class="form-label">{{ __('Nama Berkas') }}</label>
            <input type="text" name="nama_berkas" class="form-control @error('nama_berkas') is-invalid @enderror" value="{{ old('nama_berkas', $fileBerkasPekerja?->nama_berkas) }}" id="nama_berkas" placeholder="Nama Berkas">
            {!! $errors->first('nama_berkas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lokasi" class="form-label">{{ __('Lokasi') }}</label>
            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $fileBerkasPekerja?->lokasi) }}" id="lokasi" placeholder="Lokasi">
            {!! $errors->first('lokasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>