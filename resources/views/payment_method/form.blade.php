<div class="form-group mb-2 mb20">
    <label for="bank" class="form-label">{{ __('Bank') }}</label>
    <input type="text" required name="bank" class="form-control @error('bank') is-invalid @enderror" value="{{ old('bank', $paymentMethod?->bank) }}" id="bank" placeholder="Bank">
    {!! $errors->first('bank', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>
<div class="form-group mb-2 mb20">
    <label for="no_rek" class="form-label">{{ __('No Rek') }}</label>
    <input type="text" required name="no_rek" class="form-control @error('no_rek') is-invalid @enderror" value="{{ old('no_rek', $paymentMethod?->no_rek) }}" id="no_rek" placeholder="No Rek">
    {!! $errors->first('no_rek', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>
