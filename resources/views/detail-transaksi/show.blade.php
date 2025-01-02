@extends('layouts.app')

@section('template_title')
    {{ $detailTransaksi->name ?? __('Show') . " " . __('Detail Transaksi') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Detail Transaksi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('detail-transaksis.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Transaksi Id:</strong>
                            {{ $detailTransaksi->transaksi_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pekerja Id:</strong>
                            {{ $detailTransaksi->pekerja_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection