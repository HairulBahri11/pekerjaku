@extends('layouts.app')

@section('template_title')
    {{ $fotoDetailPekerjaan->name ?? __('Show') . " " . __('Foto Detail Pekerjaan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Foto Detail Pekerjaan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('foto-detail-pekerjaans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Pekerja Id:</strong>
                            {{ $fotoDetailPekerjaan->pekerja_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Foto:</strong>
                            {{ $fotoDetailPekerjaan->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
