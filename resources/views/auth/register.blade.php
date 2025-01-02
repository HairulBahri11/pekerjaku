@extends('layouts.app')

@php
$title = 'Register'
@endphp

@section('content')
@foreach($errors->all() as $error)
<script>
    Swal.fire({
        icon: 'error',
        title: '<?= $error ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endforeach

<div class="register-page">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body" style="border-radius: 50%;">
                <div class="text-center mb-3">
                    <img src="{{ url('assets/img/logo.png')}}" alt="AdminLTE Logo" width="50%" style="opacity: .8">
                    <!-- <h3 style="font-weight: bold;">TOKO BUAH<br> PRIMA</h3> -->
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6 style="text-align: center;" class="mb-3">Silahkan Pilih Role Terlebih Dahulu</h6>
                    </div>
                    <div class="col-sm-12">
                        <button id="pekerja" type="button" class="btn btn-primary mr-3 ml-4" style="font-size: 24px; padding-right: 1.5rem; padding-top: 1rem;">
                            <i class="fas fa-users pl-2"></i>
                            <p>
                                &nbsp;&nbsp; Pekerja
                            </p>
                        </button>
                        <button type="button" id="majikan" class="btn btn-success" style="font-size: 24px; padding-right: 1.5rem; padding-top: 1rem;">
                            <i class="fas fa-user-tie  pl-2"></i>
                            <p>
                                &nbsp;&nbsp; Majikan
                            </p>
                        </button>
                    </div>
                </div>

                <div id="pekerja">
                    <form action="{{ route('register') }}" method="post" style="display: none;">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" name="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="inputPassword" minlength="8" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle('inputPassword')">
                                    <span class="fas fa-lock" id="lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="RetypePassword" minlength="8" class="form-control" name="password_confirmation" placeholder="Confirm password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle1('RetypePassword')">
                                    <span class="fas fa-lock" id="lock1"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Sudah punya akun? klik <a href="{{ url('login') }}" class="fw-bold text-primary">Login</a></p>
                    </form>
                </div>


                <div id="majikan">
                    <form action="{{ route('register') }}" method="post" style="display: none;">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full name" name="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="inputPassword" minlength="8" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle('inputPassword')">
                                    <span class="fas fa-lock" id="lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="RetypePassword" minlength="8" class="form-control" name="password_confirmation" placeholder="Confirm password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle1('RetypePassword')">
                                    <span class="fas fa-lock" id="lock1"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                        <p class="text-center mt-2">Sudah punya akun? klik <a href="{{ url('login') }}" class="fw-bold text-primary">Login</a></p>

                    </form>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</div>

@endsection