<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pemesanan_id" class="form-label">{{ __('Pemesanan Id') }}</label>
            <input type="text" name="pemesanan_id" class="form-control @error('pemesanan_id') is-invalid @enderror" value="{{ old('pemesanan_id', $transaksi?->pemesanan_id) }}" id="pemesanan_id" placeholder="Pemesanan Id">
            {!! $errors->first('pemesanan_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="biaya_admin" class="form-label">{{ __('Biaya Admin') }}</label>
            <input type="text" name="biaya_admin" class="form-control @error('biaya_admin') is-invalid @enderror" value="{{ old('biaya_admin', $transaksi?->biaya_admin) }}" id="biaya_admin" placeholder="Biaya Admin">
            {!! $errors->first('biaya_admin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="metode_pembayaran" class="form-label">{{ __('Metode Pembayaran') }}</label>
            <input type="text" name="metode_pembayaran" class="form-control @error('metode_pembayaran') is-invalid @enderror" value="{{ old('metode_pembayaran', $transaksi?->metode_pembayaran) }}" id="metode_pembayaran" placeholder="Metode Pembayaran">
            {!! $errors->first('metode_pembayaran', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $transaksi?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>