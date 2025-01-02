<div class="form-group mb-2 mb20">
    <label for="profesi" class="form-label">{{ __('Profesi') }}</label>
    <input type="text" name="profesi" class="form-control @error('profesi') is-invalid @enderror" required value="{{ old('profesi', $profesi?->profesi) }}" id="profesi" placeholder="Profesi">
    {!! $errors->first('profesi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>