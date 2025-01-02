@extends('layouts.app')

@section('template_title')
    {{ $ulasan->name ?? __('Show') . " " . __('Ulasan') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ulasan</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ulasans.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Detail Transaksi Id:</strong>
                            {{ $ulasan->detail_transaksi_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Rating:</strong>
                            {{ $ulasan->rating }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ulasan:</strong>
                            {{ $ulasan->ulasan }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
