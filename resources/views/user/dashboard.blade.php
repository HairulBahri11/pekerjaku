@extends('layouts.sidebar')

@section('content')
<section class="content">
    <div class="container-fluid">
        <h2 class="mb-5">Selamat Datang {{Auth::user()->name}}</h2>

        @foreach($notif as $n)
        @if($n->jenis == 'aktif')
        <div class="card alert alert-success notif" style="padding: 2rem;">
            <div class="card-header d-flex mb-3">
                <h4><i class="fas fa-bell"></i> Pemberitahuan Akun Anda Di Aktifkan</h4>
                <div class="text-right" style="position: absolute; right:0; font-weight: bold;">
                    <h4 onclick="hapus_notif(<?= $n->id ?>,this)" style="cursor: pointer;">X</h4>
                </div>
            </div>
            <div class="card-content mt-3">
                <h5>{{$n->pesan}}</h5>
            </div>
        </div>
        @elseif($n->jenis == 'non-active')
        <div class="card alert alert-danger notif" style="padding: 2rem;">
            <div class="card-header d-flex mb-3">
                <h4><i class="fas fa-bell"></i> Pemberitahuan Akun Anda Di Non-Aktifkan</h4>
                <div class="text-right" style="position: absolute; right:0; font-weight: bold;">
                    <h4 onclick="hapus_notif(<?= $n->id ?>,this)" style="cursor: pointer;">X</h4>
                </div>
            </div>
            <div class="card-content mt-3">
                <h5>{{$n->pesan}}</h5>
            </div>
        </div>
        @elseif($n->jenis == 'tolak')
        <div class="card alert alert-warning notif" style="padding: 2rem;">
            <div class="card-header d-flex mb-3">
                <h4><i class="fas fa-bell"></i> Pemberitahuan Akun Anda Di Tolak</h4>
                <div class="text-right" style="position: absolute; right:0; font-weight: bold;">
                    <h4 onclick="hapus_notif(<?= $n->id ?>,this)" style="cursor: pointer;">X</h4>
                </div>
            </div>
            <div class="card-content mt-3">
                <h5>{{$n->pesan}}</h5>
            </div>
        </div>
        @endif
        @endforeach

        @if(Auth::user()->role == 'majikan' && Auth::user()->majikan?->alamat == null)
        <div class="card alert alert-warning" style="padding: 2rem;">
            <div class="card-content">
                <h4> <i class="fas fa-exclamation-triangle"></i> Silahkan Lengkapi Profile Anda Untuk Menggunakan Fitur-fitur Pada Aplikasi Ini !!!</h4>
                <a href="{{url('edit_profile/'.Auth::user()->id)}}" class="btn btn-danger mt-2" type="button" style="text-decoration: none;">Lengkapi Profile</a>
            </div>
        </div>
        @endif
        @if(Auth::user()->role == 'pekerja' && Auth::user()->pekerja?->keterampilan == null)
        <div class="card alert alert-warning" style="padding: 2rem;">
            <div class="card-content">
                <h4> <i class="fas fa-exclamation-triangle"></i> Silahkan Lengkapi Profile Anda Untuk Menggunakan Fitur-fitur Pada Aplikasi Ini !!!</h4>
                <a href="{{url('edit_profile/'.Auth::user()->id)}}" class="btn btn-danger mt-2" type="button" style="text-decoration: none;">Lengkapi Profile</a>
            </div>
        </div>
        @endif
    </div><!-- /.container-fluid -->
</section>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function hapus_notif(id, button) {
        $.ajax({
            url: '/hapus_notif',
            type: 'POST', // Perbaiki typo dari 'POSt' menjadi 'POST'
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
            },
            success: function(response) {
                // Menghapus baris yang sesuai
                $(button).closest('.notif').remove(); // Ganti dengan class .input-row-file-berkas
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message);
            }
        });
    }
</script>
@endsection