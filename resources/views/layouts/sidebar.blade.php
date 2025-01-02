@extends('layouts.main')

@section('container')

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style="text-align: right">

                <img src="{{url(Auth::user()->foto)}}" class="img-circle mb-2" width="35px" alt="User Image">
                <span class="ml-w">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{url(Auth::user()->foto)}}" class="img-circle mr-3 mb-2" width="50px" alt="User Image">

                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{ Auth::user()->name }}
                            </h3>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <a href="{{url('edit_profile/'.Auth::user()->id)}}" class="dropdown-item text-center">Edit Profile</a>
                <a href="#" class="dropdown-item dropdown-footer text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: rgba(244,246,249,255);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center;">
        <div class="text-center mb-1">
            <img src="{{ url('assets/img/logo.png')}}" alt="AdminLTE Logo" width="50%" style="opacity: .8">
            <!-- <h3 style="font-weight: bold;">Pekerjaku</h3> -->
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url('dashboard')}}" class="nav-link  {{ Request::is('*dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        <p>
                            &nbsp;&nbsp;Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('profesi')}}" class="nav-link  {{ Request::is('*profesi*') ? 'active' : '' }}">
                        <i class="fas fa-user-tie"></i>
                        <p>
                            &nbsp;&nbsp; Profesi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('latar_belakang')}}" class="nav-link  {{ Request::is('*latar_belakang*') ? 'active' : '' }}">
                        <i class="fas fa-vest"></i>
                        <p>
                            &nbsp;&nbsp; Latar Belakang
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('majikan')}}" class="nav-link  {{ Request::is('*majikan*','*file_berkas_majikan*') ? 'active' : '' }}">
                        <i class="fas fa-user-tie"></i>
                        <p>
                            &nbsp;&nbsp; Majikan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('pekerja')}}" class="nav-link  {{ Request::is('*pekerja*','*foto_detail_pekerjaan*','*file_berkas_pekerja*','*lokasi_kerja*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i>
                        <p>
                            &nbsp;&nbsp; Pekerja
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('pemesanan')}}" class="nav-link  {{ Request::is('*pemesanan*') ? 'active' : '' }}">
                        <i class="fas fa-clipboard"></i>
                        <p>
                            &nbsp;&nbsp; Pemesanan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('transaksi')}}" class="nav-link  {{ Request::is('*transaksi*','*detail_transaksi*','*ulasan*') ? 'active' : '' }}">
                        <i class="fas fa-money-check"></i>
                        <p>
                            &nbsp;&nbsp; Transaksi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">{{ $title }}</h3>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
</div>
@endsection