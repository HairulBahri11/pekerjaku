<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $pekerja?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="latar_belakang_id" class="form-label">{{ __('Latar Belakang Id') }}</label>
            <input type="text" name="latar_belakang_id" class="form-control @error('latar_belakang_id') is-invalid @enderror" value="{{ old('latar_belakang_id', $pekerja?->latar_belakang_id) }}" id="latar_belakang_id" placeholder="Latar Belakang Id">
            {!! $errors->first('latar_belakang_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profesi_id" class="form-label">{{ __('Profesi Id') }}</label>
            <input type="text" name="profesi_id" class="form-control @error('profesi_id') is-invalid @enderror" value="{{ old('profesi_id', $pekerja?->profesi_id) }}" id="profesi_id" placeholder="Profesi Id">
            {!! $errors->first('profesi_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="total_pengalaman" class="form-label">{{ __('Total Pengalaman') }}</label>
            <input type="text" name="total_pengalaman" class="form-control @error('total_pengalaman') is-invalid @enderror" value="{{ old('total_pengalaman', $pekerja?->total_pengalaman) }}" id="total_pengalaman" placeholder="Total Pengalaman">
            {!! $errors->first('total_pengalaman', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pendidikan_terakhir" class="form-label">{{ __('Pendidikan Terakhir') }}</label>
            <input type="text" name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" value="{{ old('pendidikan_terakhir', $pekerja?->pendidikan_terakhir) }}" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir">
            {!! $errors->first('pendidikan_terakhir', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gaji_bulanan" class="form-label">{{ __('Gaji Bulanan') }}</label>
            <input type="text" name="gaji_bulanan" class="form-control @error('gaji_bulanan') is-invalid @enderror" value="{{ old('gaji_bulanan', $pekerja?->gaji_bulanan) }}" id="gaji_bulanan" placeholder="Gaji Bulanan">
            {!! $errors->first('gaji_bulanan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tgl_lahir" class="form-label">{{ __('Tgl Lahir') }}</label>
            <input type="text" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{ old('tgl_lahir', $pekerja?->tgl_lahir) }}" id="tgl_lahir" placeholder="Tgl Lahir">
            {!! $errors->first('tgl_lahir', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="agama" class="form-label">{{ __('Agama') }}</label>
            <input type="text" name="agama" class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama', $pekerja?->agama) }}" id="agama" placeholder="Agama">
            {!! $errors->first('agama', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deskripsi" class="form-label">{{ __('Deskripsi') }}</label>
            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi', $pekerja?->deskripsi) }}" id="deskripsi" placeholder="Deskripsi">
            {!! $errors->first('deskripsi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tinggi" class="form-label">{{ __('Tinggi') }}</label>
            <input type="text" name="tinggi" class="form-control @error('tinggi') is-invalid @enderror" value="{{ old('tinggi', $pekerja?->tinggi) }}" id="tinggi" placeholder="Tinggi">
            {!! $errors->first('tinggi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="berat" class="form-label">{{ __('Berat') }}</label>
            <input type="text" name="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat', $pekerja?->berat) }}" id="berat" placeholder="Berat">
            {!! $errors->first('berat', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="suku" class="form-label">{{ __('Suku') }}</label>
            <input type="text" name="suku" class="form-control @error('suku') is-invalid @enderror" value="{{ old('suku', $pekerja?->suku) }}" id="suku" placeholder="Suku">
            {!! $errors->first('suku', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Status') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $pekerja?->status) }}" id="status" placeholder="Status">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status_pribadi" class="form-label">{{ __('Status Pribadi') }}</label>
            <input type="text" name="status_pribadi" class="form-control @error('status_pribadi') is-invalid @enderror" value="{{ old('status_pribadi', $pekerja?->status_pribadi) }}" id="status_pribadi" placeholder="Status Pribadi">
            {!! $errors->first('status_pribadi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status_active" class="form-label">{{ __('Status Active') }}</label>
            <input type="text" name="status_active" class="form-control @error('status_active') is-invalid @enderror" value="{{ old('status_active', $pekerja?->status_active) }}" id="status_active" placeholder="Status Active">
            {!! $errors->first('status_active', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>