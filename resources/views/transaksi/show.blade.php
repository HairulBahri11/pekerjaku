@extends('layouts.app')

@section('template_title')
    {{ $transaksi->name ?? __('Show') . " " . __('Transaksi') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Transaksi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('transaksis.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Pemesanan Id:</strong>
                            {{ $transaksi->pemesanan_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Biaya Admin:</strong>
                            {{ $transaksi->biaya_admin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Metode Pembayaran:</strong>
                            {{ $transaksi->metode_pembayaran }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Status:</strong>
                            {{ $transaksi->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
