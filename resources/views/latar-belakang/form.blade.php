<div class="form-group mb-2 mb20">
    <label for="latar_belakang" class="form-label">{{ __('Latar Belakang') }}</label>
    <input type="hidden" name="id" value="{{ old('id', $latarBelakang?->id) }}">
    <input type="text" name="latar_belakang" class="form-control @error('latar_belakang') is-invalid @enderror" value="{{ old('latar_belakang', $latarBelakang?->latar_belakang) }}" id="latar_belakang" placeholder="Latar Belakang">
    {!! $errors->first('latar_belakang', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>
<div class="form-group mb-2 mb20">
    <label for="deskripsi" class="form-label">{{ __('Deskripsi') }}</label>
    <textarea type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="4" placeholder="Deskripsi">{{ old('deskripsi', $latarBelakang?->deskripsi) }}</textarea>
    {!! $errors->first('deskripsi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>