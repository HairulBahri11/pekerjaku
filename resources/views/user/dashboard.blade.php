@extends('layouts.sidebar')

@section('content')
<section class="content">
    <div class="container-fluid">
        <h2>Selamat Datang {{Auth::user()->name}}</h2>
        <table style="font-size: 20px;  margin-top: 2rem; font-weight: bold;">
            <tr>
                <td>Nama Lengkap</td>
                <td style="text-align: center; width: 3rem;">:</td>
                <td>{{Auth::user()->name}}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td style="text-align: center; width: 3rem;">:</td>
                <td>{{Auth::user()->kelas}}</td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td style="text-align: center; width: 3rem;">:</td>
                <td>{{Auth::user()->mata_kuliah}}</td>
            </tr>
            <tr>
                <td>Foto Profil</td>
                <td style="text-align: center; width: 3rem;">:</td>
                <td><img width="100" height="100" src="{{url(Auth::user()->photo)}}" alt=""></td>
            </tr>
        </table>
    </div><!-- /.container-fluid -->
</section>
@endsection
