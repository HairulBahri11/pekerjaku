<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="detail_transaksi_id" class="form-label">{{ __('Detail Transaksi Id') }}</label>
            <input type="text" name="detail_transaksi_id" class="form-control @error('detail_transaksi_id') is-invalid @enderror" value="{{ old('detail_transaksi_id', $ulasan?->detail_transaksi_id) }}" id="detail_transaksi_id" placeholder="Detail Transaksi Id">
            {!! $errors->first('detail_transaksi_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rating" class="form-label">{{ __('Rating') }}</label>
            <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating', $ulasan?->rating) }}" id="rating" placeholder="Rating">
            {!! $errors->first('rating', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ulasan" class="form-label">{{ __('Ulasan') }}</label>
            <input type="text" name="ulasan" class="form-control @error('ulasan') is-invalid @enderror" value="{{ old('ulasan', $ulasan?->ulasan) }}" id="ulasan" placeholder="Ulasan">
            {!! $errors->first('ulasan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>