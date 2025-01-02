<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $majikan?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $majikan?->alamat) }}" id="alamat" placeholder="Alamat">
            {!! $errors->first('alamat', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="biaya_pendaftaran" class="form-label">{{ __('Biaya Pendaftaran') }}</label>
            <input type="text" name="biaya_pendaftaran" class="form-control @error('biaya_pendaftaran') is-invalid @enderror" value="{{ old('biaya_pendaftaran', $majikan?->biaya_pendaftaran) }}" id="biaya_pendaftaran" placeholder="Biaya Pendaftaran">
            {!! $errors->first('biaya_pendaftaran', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="bukti_pembayaran" class="form-label">{{ __('Bukti Pembayaran') }}</label>
            <input type="text" name="bukti_pembayaran" class="form-control @error('bukti_pembayaran') is-invalid @enderror" value="{{ old('bukti_pembayaran', $majikan?->bukti_pembayaran) }}" id="bukti_pembayaran" placeholder="Bukti Pembayaran">
            {!! $errors->first('bukti_pembayaran', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $majikan?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>