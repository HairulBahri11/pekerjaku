<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="transaksi_id" class="form-label">{{ __('Transaksi Id') }}</label>
            <input type="text" name="transaksi_id" class="form-control @error('transaksi_id') is-invalid @enderror" value="{{ old('transaksi_id', $detailTransaksi?->transaksi_id) }}" id="transaksi_id" placeholder="Transaksi Id">
            {!! $errors->first('transaksi_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pekerja_id" class="form-label">{{ __('Pekerja Id') }}</label>
            <input type="text" name="pekerja_id" class="form-control @error('pekerja_id') is-invalid @enderror" value="{{ old('pekerja_id', $detailTransaksi?->pekerja_id) }}" id="pekerja_id" placeholder="Pekerja Id">
            {!! $errors->first('pekerja_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>