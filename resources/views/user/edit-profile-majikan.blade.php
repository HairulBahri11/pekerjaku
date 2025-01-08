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
                <form method="POST" action="{{ url('edit_profile_majikan_proses/'.$data->id) }}" enctype="multipart/form-data">
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
                                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile" accept="image/*">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea id="Alamat" name="alamat" class="summernote" required>
                        {{$data->majikan?->alamat }}
                        </textarea>
                    </div>

                    <div>
                        <div style="text-align: right;" id="button-add">
                            <button type="button" class="btn btn-warning" id="btn-add-file-berkas">Tambah File Berkas</button>
                        </div>
                        <table class="table table-bordered mt-4" id="file-berkas-table">
                            <thead>
                                <tr>
                                    <th>Nama Berkas</th>
                                    <th>File Berkas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($data->majikan?->fileBerkasMajikans) != 0)
                                @foreach($data->majikan?->fileBerkasMajikans as $index => $fbp )
                                <tr class="input-row-file-berkas">
                                    <td>
                                        <input type="text" name="nama_berkas[]" class="form-control" required placeholder="Input Nama Berkas" value="{{$fbp->nama_file}}">
                                    </td>
                                    <td>
                                        @if($fbp->nama_file) <a href="{{url($fbp->lokasi)}}" target="_blank"><i class="fas fa-file"></i>&nbsp;&nbsp;&nbsp;{{$fbp->nama_file}}</a><br> @endif
                                        <input type="file" name="lokasi[]" class="form-control" required placeholder="Input File Berkas" value="{{$fbp->lokasi}}">
                                    </td>
                                    <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-file-berkasw" onclick="return hapus_berkas(<?= $fbp->id ?>, this)"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                @endforeach
                                @else
                                <tr class="input-row-file-berkas">
                                    <td>
                                        <input type="text" name="nama_berkas[]" class="form-control" required placeholder="Input Nama Berkas">
                                    </td>
                                    <td>
                                        <input type="file" name="lokasi[]" class="form-control" required placeholder="Input File Berkas">
                                    </td>
                                    <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-file-berkas"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Fungsi untuk menambahkan baris baru
        $('#btn-add-file-berkas').click(function() {
            // Menambahkan baris baru di dalam tbody
            $('#file-berkas-table tbody').append(`
                                <tr class="input-row-file-berkas">
                                  <td>
                                                <input type="text" name="nama_berkas[]" class="form-control" required placeholder="Input Nama Berkas">
                                            </td>
                                            <td>
                                                <input type="file" name="lokasi[]" class="form-control" required placeholder="Input File Berkas">
                                            </td>
                                    <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-file-berkas"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                            `);
        });

        // Fungsi untuk menghapus baris tertentu
        $('#file-berkas-table').on('click', '.btn-remove-file-berkas', function() {
            // Cek jika jumlah baris lebih dari satu sebelum menghapus
            if ($('#file-berkas-table tbody .input-row-file-berkas').length == 1) {
                notif('warning', 'Tidak bisa menghapus input terakhir.');
            } else {
                $(this).closest('.input-row-file-berkas').remove();
            }
        });

    });

    function hapus_berkas(id, button) {
        $.ajax({
            url: '/hapus_berkas_majikan',
            type: 'POST', // Perbaiki typo dari 'POSt' menjadi 'POST'
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
            },
            success: function(response) {
                // Menghapus baris yang sesuai
                $(button).closest('.input-row-file-berkas').remove(); // Ganti dengan class .input-row-file-berkas
            },
            error: function(xhr) {
                alert('Error: ' + xhr.responseJSON.message);
            }
        });
    }
</script>
@endsection
