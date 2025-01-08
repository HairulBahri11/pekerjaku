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
                <form method="POST" action="{{ url('edit_profile_proses/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name" placeholder="Input Nama" required value="{{$data->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername" name="username" placeholder="Input Username" required value="{{$data->username}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoHP">No Hp</label>
                        <input type="text" class="form-control" id="exampleInputNoHP" name="no_hp" placeholder="Input No HP" required value="{{$data->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Input Email" required value="{{$data->email}}">
                    </div>

                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <div class="input-group mb-3">
                            <input type="password" id="inputPassword" name="password" minlength="8" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle('inputPassword')">
                                    <span class="fas fa-lock" id="lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="RetypePassword">Confirm Password</label>
                        <div class="input-group mb-3">
                            <input type="password" id="RetypePassword" class="form-control" minlength="8" name="password_confirmation" placeholder="Confirm password">
                            <div class="input-group-append">
                                <div class="input-group-text" onclick="toggle1('RetypePassword')">
                                    <span class="fas fa-lock" id="lock1"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img width="100" height="100" src="{{url($data->foto)}}" alt="">
                    <div class="form-group">
                        <label for="exampleInputFile">Input Profile</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group d-flex" style="position: relative; left:1rem;">
                        <button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#tolakModal"><i class="fas fa-window-close"></i> Tolak</button>
                        <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#nonAktifkanModal"><i class="fas fa-times-circle"></i> Non-Aktifkan</button>
                        <a class="btn btn-success" onclick="prosesData(event, this,'Apakah anda yakin meng-aktifkan akun ini?')" href="{{route('aktif_pekerja', $pekerja->id)}}"><i class="fas fa-check-circle"></i> Terima & Aktifkan</a>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>




<!-- Modal -->
<div class="modal fade" id="tolakModal" tabindex="-1" aria-labelledby="tolakModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tolakModal"> <i class="fas fa-window-close"></i> Alasan Ditolak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('pekerja.update',$pekerja->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="status" value="in-active">
                        <input type="hidden" name="jenis" value="tolak">
                        <textarea id="Alasan" name="alasan" class="summernote" required>
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="nonAktifkanModal" tabindex="-1" aria-labelledby="nonAktifkanModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nonAktifkanModal"><i class="fas fa-times-circle"></i> Alasan Di Non-aktifkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('pekerja.update',$pekerja->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="status" value="in-active">
                        <input type="hidden" name="jenis" value="non-active">
                        <textarea id="Alasan" name="alasan" class="summernote" required>
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Non-Aktif</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection