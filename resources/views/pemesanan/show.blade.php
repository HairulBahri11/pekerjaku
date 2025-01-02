@extends('layouts.app')

@section('template_title')
    {{ $pemesanan->name ?? __('Show') . " " . __('Pemesanan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pemesanan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pemesanans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Majikan Id:</strong>
                            {{ $pemesanan->majikan_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Jenis Pekerjaan:</strong>
                            {{ $pemesanan->jenis_pekerjaan }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Jumlah:</strong>
                            {{ $pemesanan->jumlah }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Durasi:</strong>
                            {{ $pemesanan->durasi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Lokasi:</strong>
                            {{ $pemesanan->lokasi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tgl Mulai:</strong>
                            {{ $pemesanan->tgl_mulai }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Jam Kerja:</strong>
                            {{ $pemesanan->jam_kerja }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Upah:</strong>
                            {{ $pemesanan->upah }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Deskripsi Pekerjaan:</strong>
                            {{ $pemesanan->deskripsi_pekerjaan }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Kualifikasi:</strong>
                            {{ $pemesanan->kualifikasi }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Keterampilan:</strong>
                            {{ $pemesanan->keterampilan }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Bahasa:</strong>
                            {{ $pemesanan->bahasa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
