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
                <form method="POST" action="{{ url('edit_profile_pekerja_proses/'.$data->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 ">

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
                                <label for="ProfesiID">Profesi</label>
                                <select name="profesi_id" id="ProfesiID" class="form-control select2" required>
                                    <option value="">--- Pilih Profesi ---</option>
                                    @foreach ($profesi as $pf)
                                    <option value="{{ $pf->id }}">{{ $pf->profesi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="LatarBelakangID">Latar Belakang</label>
                                <select name="latar_belakang_id" id="LatarBelakangID" class="form-control select2" required>
                                    <option value="">--- Pilih Latar Belakang ---</option>
                                    @foreach ($latar_belakang as $lb)
                                    <option value="{{ $lb->id }}">{{ $lb->latar_belakang }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="TotalPengalaman">Total Pengalaman</label>
                                <input type="number" class="form-control" id="TotalPengalaman" name="total_pengalaman" placeholder="Input Total Pengalaman" required value="{{$data->pekerja?->total_pengalaman}}">
                            </div>

                            <div class="form-group">
                                <label for="PendidikanTerakhir">Pendidikan Terakhir</label>
                                <select name="pendidikan_terakhir" id="PendidikanTerakhir" class="form-control select2" required>
                                    <option value="">--- Pilih Pendidikan Terakhir ---</option>
                                    <option value="Tidak Sekolah" {{$data->pekerja?->pendidikan_terakhir == 'Tidak Sekolah' ? 'selected' : ''}}>Tidak Sekolah</option>
                                    <option value="SD" {{$data->pekerja?->pendidikan_terakhir == 'SD' ? 'selected' : ''}}>SD</option>
                                    <option value="SMP" {{$data->pekerja?->pendidikan_terakhir == 'SMP' ? 'selected' : ''}}>SMP</option>
                                    <option value="SMA/SMK" {{$data->pekerja?->pendidikan_terakhir == 'SMA/SMK' ? 'selected' : ''}}>SMA/SMK</option>
                                    <option value="Perguruan Tinggi" {{$data->pekerja?->pendidikan_terakhir == 'Perguruan Tinggi' ? 'selected' : ''}}>Perguruan Tinggi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="GajiBulanan">Gaji Bulanan</label>
                                <input type="text" class="form-control" id="GajiBulanan" name="gaji_bulanan" placeholder="Input Gaji Bulanan" required value="{{$data->pekerja?->gaji_bulanan}}">
                            </div>

                            <div class="form-group">
                                <label for="TanggalLahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="TanggalLahir" name="tgl_lahir" placeholder="Input Tanggal Lahir" required value="{{$data->pekerja?->tgl_lahir}}">
                            </div>

                            <div class="form-group">
                                <label for="Agama">Agama</label>
                                <select name="agama" id="Agama" class="form-control select2" required>
                                    <option value="">--- Pilih Agama ---</option>
                                    <option value="Islam" {{$data->pekerja?->agama == 'Islam' ? 'selected' : ''}}>Islam</option>
                                    <option value="Protestan" {{$data->pekerja?->agama == 'Protestan' ? 'selected' : ''}}>Protestan</option>
                                    <option value="Katolik" {{$data->pekerja?->agama == 'Katolik' ? 'selected' : ''}}>Katolik</option>
                                    <option value="Hindu" {{$data->pekerja?->agama == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                                    <option value="Buddha" {{$data->pekerja?->agama == 'Buddha' ? 'selected' : ''}}>Buddha</option>
                                    <option value="Konghucu" {{$data->pekerja?->agama == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                                </select>
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
                            <div class="form-group">
                                <label for="TinggiBadan">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" id="TinggiBadan" name="tinggi" placeholder="Input Tinggi Badan" required value="{{$data->pekerja?->tinggi}}">
                            </div>

                            <div class="form-group">
                                <label for="BeratBadan">Berat Badan (Kg)</label>
                                <input type="number" class="form-control" id="BeratBadan" name="berat" placeholder="Input Berat Badan" required value="{{$data->pekerja?->berat}}">
                            </div>

                            <div class="form-group">
                                <label for="Suku">Suku</label>
                                <select name="suku" id="Suku" class="form-control select2" required>
                                    <option value="">--- Pilih Suku ---</option>
                                    <option value="Jawa" {{$data->pekerja?->suku == 'Jawa' ? 'selected' : ''}}>Jawa</option>
                                    <option value="Sunda" {{$data->pekerja?->suku == 'Sunda' ? 'selected' : ''}}>Sunda</option>
                                    <option value="Banten" {{$data->pekerja?->suku == 'Banten' ? 'selected' : ''}}>Banten</option>
                                    <option value="NTT" {{$data->pekerja?->suku == 'NTT' ? 'selected' : ''}}>NTT</option>
                                    <option value="Lampung" {{$data->pekerja?->suku == 'Lampung' ? 'selected' : ''}}>Lampung</option>
                                    <option value="Madura" {{$data->pekerja?->suku == 'Madura' ? 'selected' : ''}}>Madura</option>
                                    <option value="Melayu" {{$data->pekerja?->suku == 'Melayu' ? 'selected' : ''}}>Melayu</option>
                                    <option value="Lainnya" {{$data->pekerja?->suku == 'Lainnya' ? 'selected' : ''}}>Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select name="status_pribadi" id="Status" class="form-control select2" required>
                                    <option value="">--- Pilih Status ---</option>
                                    <option value="Menikah" {{$data->pekerja?->status_pribadi == 'Menikah' ? 'selected' : ''}}>Menikah</option>
                                    <option value="Belum Menikah" {{$data->pekerja?->status_pribadi == 'Belum Menikah' ? 'selected' : ''}}>Belum Menikah</option>
                                    <option value="Janda" {{$data->pekerja?->status_pribadi == 'Janda' ? 'selected' : ''}}>Janda</option>
                                    <option value="Duda" {{$data->pekerja?->status_pribadi == 'Duda' ? 'selected' : ''}}>Duda</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Status">Status Active</label><br>
                                @if( $data->pekerja?->status_active == 'active')
                                <td><span class="badge badge-success">Active</span></td>
                                @elseif( $data->pekerja?->status_active == 'in-active')
                                <td><span class="badge badge-danger">Non Active</span></td>
                                @else
                                <td><span class="badge badge-warning">Proccess</span></td>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="Deskripsi">Deskripsi</label>
                                <textarea id="Deskripsi" name="deskripsi" class="summernote" required>
                                {{$data->pekerja?->deskripsi }}
                                </textarea>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div>
                                <div style="text-align: right;" id="button-add">
                                    <button type="button" class="btn btn-warning" id="btn-add-lokasi-kerja">Tambah Lokasi Kerja</button>
                                </div>
                                <table class="table table-bordered mt-4" id="lokasi-kerja-table">
                                    <thead>
                                        <tr>
                                            <th>Kota</th>
                                            <th>Provinsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($data->pekerja?->lokasiKerjas))
                                        @foreach($data->pekerja?->lokasiKerjas as $lk )
                                        <tr class="input-row-kerja">
                                            <td>
                                                <input type="text" name="kota[]" value="{{ $lk->kota }}" class="form-control" required placeholder="Input Kota">
                                            </td>
                                            <td>
                                                <input type="text" name="provinsi[]" value="{{$lk->provinsi}}" class="form-control" required placeholder="Input Provinsi">
                                            </td>
                                            <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-kerja"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="input-row-kerja">
                                            <td>
                                                <input type="text" name="kota[]" class="form-control" required placeholder="Input Kota">
                                            </td>
                                            <td>
                                                <input type="text" name="provinsi[]" class="form-control" required placeholder="Input Provinsi">
                                            </td>
                                            <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-kerja"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div>
                                <div style="text-align: right;" id="button-add">
                                    <button type="button" class="btn btn-warning" id="btn-add-keterampilan">Tambah Keterampilan</button>
                                </div>
                                <table class="table table-bordered mt-4" id="keterampilan-table">
                                    <thead>
                                        <tr>
                                            <th>Keterampilan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($data->pekerja?->keterampilan)
                                        @php $keterampilan = json_decode($data->pekerja?->keterampilan) @endphp
                                        @foreach($keterampilan as $ktr )
                                        <tr class="input-row-keterampilan">
                                            <td>
                                                <input type="text" name="keterampilan[]" class="form-control" required placeholder="Input Keterampilan" value="{{$ktr}}">
                                            </td>
                                            <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-keterampilan"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="input-row-keterampilan">
                                            <td>
                                                <input type="text" name="keterampilan[]" class="form-control" required placeholder="Input Keterampilan">
                                            </td>
                                            <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-keterampilan"><i class="fas fa-trash-alt"></i></button></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
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
                                        @if(count($data->pekerja?->fileBerkasPekerjas) != 0)
                                        @foreach($data->pekerja?->fileBerkasPekerjas as $index => $fbp )
                                        <tr class="input-row-file-berkas">
                                            <td>
                                                <input type="text" name="nama_berkas[]" class="form-control" required placeholder="Input Nama Berkas" value="{{$fbp->nama_berkas}}">
                                            </td>
                                            <td>
                                                @if($fbp->nama_berkas) <a href="{{url($fbp->lokasi)}}" target="_blank"><i class="fas fa-file"></i>&nbsp;&nbsp;&nbsp;{{$fbp->nama_berkas}}</a><br> @endif
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
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDetailPekerjaan">Input Foto Detail Pekerjaan </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" multiple name="detail_pekerjaan[]" accept="image/*" id="exampleInputDetailPekerjaan">
                                        <label class="custom-file-label" for="exampleInputDetailPekerjaan">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div style="display:flex; text-align:left;">
                                @foreach($data->pekerja?->fotoDetailPekerjaans as $fdp)
                                <span style="text-align:center;"><img src="{{url($fdp->foto)}}" alt="" width="50%"><br><a href="{{route('hapus_gallery',$fdp->id)}}" class="text-danger">Hapus</a></span>
                                @endforeach
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
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
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
        $('#btn-add-lokasi-kerja').click(function() {
            // Menambahkan baris baru di dalam tbody
            $('#lokasi-kerja-table tbody').append(`
                                <tr class="input-row-kerja">
                                     <td>
                                                <input type="text" name="kota[]" class="form-control" required placeholder="Input Kota">
                                            </td>
                                            <td>
                                                <input type="text" name="provinsi[]" class="form-control" required placeholder="Input Provinsi">
                                            </td>
                                    <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-kerja"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                            `);
        });

        // Fungsi untuk menghapus baris tertentu
        $('#lokasi-kerja-table').on('click', '.btn-remove-kerja', function() {
            // Cek jika jumlah baris lebih dari satu sebelum menghapus
            if ($('#lokasi-kerja-table tbody .input-row-kerja').length == 1) {
                notif('warning', 'Tidak bisa menghapus input terakhir.');
            } else {
                $(this).closest('.input-row-kerja').remove();
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


        // Fungsi untuk menambahkan baris baru
        $('#btn-add-keterampilan').click(function() {
            // Menambahkan baris baru di dalam tbody
            $('#keterampilan-table tbody').append(`
                                <tr class="input-row-keterampilan">
                                   <td><input type="text" name="keterampilan[]" class="form-control" required placeholder="Input Keterampilan"></td>
                                    <td style="text-align: center; width: 5%;"><button type="button" class="btn btn-danger btn-remove-keterampilan"><i class="fas fa-trash-alt"></i></button></td>
                                </tr>
                            `);
        });

        // Fungsi untuk menghapus baris tertentu
        $('#keterampilan-table').on('click', '.btn-remove-keterampilan', function() {
            // Cek jika jumlah baris lebih dari satu sebelum menghapus
            if ($('#keterampilan-table tbody .input-row-keterampilan').length == 1) {
                notif('warning', 'Tidak bisa menghapus input terakhir.');
            } else {
                $(this).closest('.input-row-keterampilan').remove();
            }
        });


    });

    function hapus_berkas(id, button) {
        $.ajax({
            url: '/hapus_berkas_pekerja',
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