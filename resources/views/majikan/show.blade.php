@extends('layouts.app')

@section('template_title')
    {{ $majikan->name ?? __('Show') . " " . __('Majikan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Majikan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('majikans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>User Id:</strong>
                            {{ $majikan->user_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Alamat:</strong>
                            {{ $majikan->alamat }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Biaya Pendaftaran:</strong>
                            {{ $majikan->biaya_pendaftaran }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Bukti Pembayaran:</strong>
                            {{ $majikan->bukti_pembayaran }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status:</strong>
                            {{ $majikan->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
