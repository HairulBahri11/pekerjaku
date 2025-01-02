@extends('layouts.app')

@section('template_title')
    {{ $fileBerkasPekerja->name ?? __('Show') . " " . __('File Berkas Pekerja') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} File Berkas Pekerja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('file-berkas-pekerjas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Pekerja Id:</strong>
                            {{ $fileBerkasPekerja->pekerja_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nama Berkas:</strong>
                            {{ $fileBerkasPekerja->nama_berkas }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Lokasi:</strong>
                            {{ $fileBerkasPekerja->lokasi }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
