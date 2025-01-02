<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="majikan_id" class="form-label">{{ __('Majikan Id') }}</label>
            <input type="text" name="majikan_id" class="form-control @error('majikan_id') is-invalid @enderror" value="{{ old('majikan_id', $fileBerkasMajikan?->majikan_id) }}" id="majikan_id" placeholder="Majikan Id">
            {!! $errors->first('majikan_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_file" class="form-label">{{ __('Nama File') }}</label>
            <input type="text" name="nama_file" class="form-control @error('nama_file') is-invalid @enderror" value="{{ old('nama_file', $fileBerkasMajikan?->nama_file) }}" id="nama_file" placeholder="Nama File">
            {!! $errors->first('nama_file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lokasi" class="form-label">{{ __('Lokasi') }}</label>
            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $fileBerkasMajikan?->lokasi) }}" id="lokasi" placeholder="Lokasi">
            {!! $errors->first('lokasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>