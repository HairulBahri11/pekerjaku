<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="majikan_id" class="form-label">{{ __('Majikan Id') }}</label>
            <input type="text" name="majikan_id" class="form-control @error('majikan_id') is-invalid @enderror" value="{{ old('majikan_id', $pemesanan?->majikan_id) }}" id="majikan_id" placeholder="Majikan Id">
            {!! $errors->first('majikan_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_pekerjaan" class="form-label">{{ __('Jenis Pekerjaan') }}</label>
            <input type="text" name="jenis_pekerjaan" class="form-control @error('jenis_pekerjaan') is-invalid @enderror" value="{{ old('jenis_pekerjaan', $pemesanan?->jenis_pekerjaan) }}" id="jenis_pekerjaan" placeholder="Jenis Pekerjaan">
            {!! $errors->first('jenis_pekerjaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jumlah" class="form-label">{{ __('Jumlah') }}</label>
            <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah', $pemesanan?->jumlah) }}" id="jumlah" placeholder="Jumlah">
            {!! $errors->first('jumlah', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="durasi" class="form-label">{{ __('Durasi') }}</label>
            <input type="text" name="durasi" class="form-control @error('durasi') is-invalid @enderror" value="{{ old('durasi', $pemesanan?->durasi) }}" id="durasi" placeholder="Durasi">
            {!! $errors->first('durasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lokasi" class="form-label">{{ __('Lokasi') }}</label>
            <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $pemesanan?->lokasi) }}" id="lokasi" placeholder="Lokasi">
            {!! $errors->first('lokasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tgl_mulai" class="form-label">{{ __('Tgl Mulai') }}</label>
            <input type="text" name="tgl_mulai" class="form-control @error('tgl_mulai') is-invalid @enderror" value="{{ old('tgl_mulai', $pemesanan?->tgl_mulai) }}" id="tgl_mulai" placeholder="Tgl Mulai">
            {!! $errors->first('tgl_mulai', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jam_kerja" class="form-label">{{ __('Jam Kerja') }}</label>
            <input type="text" name="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror" value="{{ old('jam_kerja', $pemesanan?->jam_kerja) }}" id="jam_kerja" placeholder="Jam Kerja">
            {!! $errors->first('jam_kerja', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="upah" class="form-label">{{ __('Upah') }}</label>
            <input type="text" name="upah" class="form-control @error('upah') is-invalid @enderror" value="{{ old('upah', $pemesanan?->upah) }}" id="upah" placeholder="Upah">
            {!! $errors->first('upah', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deskripsi_pekerjaan" class="form-label">{{ __('Deskripsi Pekerjaan') }}</label>
            <input type="text" name="deskripsi_pekerjaan" class="form-control @error('deskripsi_pekerjaan') is-invalid @enderror" value="{{ old('deskripsi_pekerjaan', $pemesanan?->deskripsi_pekerjaan) }}" id="deskripsi_pekerjaan" placeholder="Deskripsi Pekerjaan">
            {!! $errors->first('deskripsi_pekerjaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kualifikasi" class="form-label">{{ __('Kualifikasi') }}</label>
            <input type="text" name="kualifikasi" class="form-control @error('kualifikasi') is-invalid @enderror" value="{{ old('kualifikasi', $pemesanan?->kualifikasi) }}" id="kualifikasi" placeholder="Kualifikasi">
            {!! $errors->first('kualifikasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="keterampilan" class="form-label">{{ __('Keterampilan') }}</label>
            <input type="text" name="keterampilan" class="form-control @error('keterampilan') is-invalid @enderror" value="{{ old('keterampilan', $pemesanan?->keterampilan) }}" id="keterampilan" placeholder="Keterampilan">
            {!! $errors->first('keterampilan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="bahasa" class="form-label">{{ __('Bahasa') }}</label>
            <input type="text" name="bahasa" class="form-control @error('bahasa') is-invalid @enderror" value="{{ old('bahasa', $pemesanan?->bahasa) }}" id="bahasa" placeholder="Bahasa">
            {!! $errors->first('bahasa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>