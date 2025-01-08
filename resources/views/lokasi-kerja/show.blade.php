@extends('layouts.app')

@section('template_title')
    {{ $lokasiKerja->name ?? __('Show') . " " . __('Lokasi Kerja') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lokasi Kerja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('lokasi-kerjas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Pekerja Id:</strong>
                            {{ $lokasiKerja->pekerja_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Kota:</strong>
                            {{ $lokasiKerja->kota }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Provinsi:</strong>
                            {{ $lokasiKerja->provinsi }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
