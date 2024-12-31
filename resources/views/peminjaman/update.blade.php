@extends('layouts.sidebar')

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
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card mb-3">
            <div class="card-body">
                <form method="POST" action="{{ route('peminjaman.update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputSiswa">Siswa</label>
                        <select class="custom-select rounded-0" id="exampleInputSiswa" name="siswa_id" required>
                            <option value="">--- Pilih Siswa ---</option>
                            @foreach($siswa as $siswa)
                            <option value="{{$siswa->id}}" {{$siswa->id == $data->siswa_id ? 'selected' : ''}}>{{$siswa->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputBuku">Buku</label>
                        <select class="custom-select rounded-0" id="exampleInputBuku" name="buku_id" required>
                            <option value="">--- Pilih Buku ---</option>
                            @foreach($buku as $buku)
                            <option value="{{$buku->id}}" {{$buku->id == $data->buku_id ? 'selected' : ''}}>{{$buku->judul_buku}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTanggalPeminjaman">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="exampleInputTanggalPeminjaman" value="{{$data->tgl_peminjaman}}" name="tgl_peminjaman" placeholder="Input Tanggal Peminjaman" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTanggalJatuhTempo">Tanggal Jatuh Tempo</label>
                        <input type="date" class="form-control" id="exampleInputTanggalJatuhTempo" value="{{$data->tgl_jatuh_tempo}}" name="tgl_jatuh_tempo" placeholder="Input Tanggal Jatuh Tempo" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection