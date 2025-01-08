@extends('layouts.app')

@section('template_title')
    {{ $pekerja->name ?? __('Show') . " " . __('Pekerja') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pekerja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pekerjas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>User Id:</strong>
                            {{ $pekerja->user_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Latar Belakang Id:</strong>
                            {{ $pekerja->latar_belakang_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Profesi Id:</strong>
                            {{ $pekerja->profesi_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Total Pengalaman:</strong>
                            {{ $pekerja->total_pengalaman }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pendidikan Terakhir:</strong>
                            {{ $pekerja->pendidikan_terakhir }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Gaji Bulanan:</strong>
                            {{ $pekerja->gaji_bulanan }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tgl Lahir:</strong>
                            {{ $pekerja->tgl_lahir }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Agama:</strong>
                            {{ $pekerja->agama }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Deskripsi:</strong>
                            {{ $pekerja->deskripsi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tinggi:</strong>
                            {{ $pekerja->tinggi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Berat:</strong>
                            {{ $pekerja->berat }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Suku:</strong>
                            {{ $pekerja->suku }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status:</strong>
                            {{ $pekerja->status }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status Pribadi:</strong>
                            {{ $pekerja->status_pribadi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status Active:</strong>
                            {{ $pekerja->status_active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
