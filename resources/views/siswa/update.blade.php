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
                <form method="POST" action="{{ route('siswa.update',$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputNama">Nama</label>
                        <input type="text" class="form-control" id="exampleInputNama" name="nama" value="{{$data->nama}}" placeholder="Input Nama Penjual" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNamaKelas">Kelas</label>
                        <input type="text" class="form-control" id="exampleInputNamaKelas" name="kelas" value="{{$data->kelas}}" placeholder="Input Kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAlamat">Alamat</label>
                        <textarea class="form-control" id="exampleInputAlamat" rows="4" placeholder="Input Alamat" name="alamat" required>{{$data->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoHP">No HP</label>
                        <input type="text" class="form-control" id="exampleInputNoHP" name="no_hp" value="{{$data->no_hp}}" placeholder="Input No HP" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection