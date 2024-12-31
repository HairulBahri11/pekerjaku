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
                <form method="POST" action="{{ route('buku.update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputJudulBuku">Judul Buku</label>
                        <input type="text" class="form-control" id="exampleInputJudulBuku" value="{{$data->judul_buku}}" name="judul_buku" placeholder="Input Judul Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPenulis">Penulis</label>
                        <input type="text" class="form-control" id="exampleInputPenulis" value="{{$data->penulis}}" name="penulis" placeholder="Input Penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPenerbit">Penerbit</label>
                        <input type="text" class="form-control" id="exampleInputPenerbit" value="{{$data->penerbit}}" name="penerbit" placeholder="Input Penerbit" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleTahunTerbit">Tahun Terbit</label>
                        <input type="number" class="form-control" id="exampleTahunTerbit" value="{{$data->thn_terbit}}" name="thn_terbit" placeholder="Input Tahun Terbit" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleJumlah">Jumlah</label>
                        <input type="number" class="form-control" id="exampleJumlah" value="{{$data->jumlah}}" name="jumlah" placeholder="Input Jumlah" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection