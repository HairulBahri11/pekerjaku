@extends('layouts.app')

@php
$title = 'Login'
@endphp

@section('content')
@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: '{{session("error")}}',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endif

@if(session('message'))
<script>
    Swal.fire({
        icon: 'warning',
        title: '{{session("message")}}',
        showConfirmButton: true,
        timer: 5000
    })
</script>
@endif


<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body" style="border-radius: 50%;">
                <div class="text-center mb-3">
                    <h3 style="font-weight: bold;">PERPUSTAKAAN<br> ONLINE</h3>
                </div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Password">
                        <div class="input-group-append">
                            <div class="input-group-text" onclick="toggle('inputPassword')">
                                <span class="fas fa-lock" id="lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-block btn-danger">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</div>

@endsection