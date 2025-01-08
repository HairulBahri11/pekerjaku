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
                <div class="row">
                    <div class="col-md-6 ">

                        <div class="form-group">
                            <label for="exampleInputName">Nama</label> : {{$pekerja->user?->name}}
                        </div>


                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label> : {{$pekerja->user?->username}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNoHP">No Hp</label> : {{$pekerja->user?->no_hp}}
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label> : {{$pekerja->user?->email}}
                        </div>

                        <div class="form-group">
                            <label for="ProfesiID">Profesi</label> : {{$pekerja->profesi?->profesi}}
                        </div>

                        <div class="form-group">
                            <label for="LatarBelakangID">Latar Belakang</label> : {{$pekerja->latarBelakang?->latar_belakang}}
                        </div>

                        <div class="form-group">
                            <label for="TotalPengalaman">Total Pengalaman</label> : {{$pekerja->total_pengalaman}}
                        </div>

                        <div class="form-group">
                            <label for="PendidikanTerakhir">Pendidikan Terakhir</label> : {{$pekerja->pendidikan_terakhir}}
                        </div>
                        <div class="form-group">
                            <label for="GajiBulanan">Gaji Bulanan</label> : Rp. {{number_format($pekerja->gaji_bulanan, 0, ',', '.')}}
                        </div>

                        <div class="form-group">
                            <label for="TanggalLahir">Tanggal Lahir</label> : {{$pekerja->tgl_lahir}}
                        </div>

                        <div class="form-group">
                            <label for="Agama">Agama</label> : {{$pekerja->agama}}
                        </div>

                        <div class="form-group">
                            <label for="TinggiBadan">Tinggi Badan (cm)</label> : {{$pekerja->tinggi}}
                        </div>

                        <div class="form-group">
                            <label for="BeratBadan">Berat Badan (Kg)</label> : {{$pekerja->berat}}
                        </div>

                        <div class="form-group">
                            <label for="Suku">Suku</label> : {{$pekerja->suku}}
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label> : {{$pekerja->status_pribadi}}
                        </div>

                        <div class="form-group">
                            <label for="Status">Status Active</label> :
                            @if( $pekerja->status_active == 'active')
                            <span class="badge badge-success">Active</span>
                            @elseif( $pekerja->status_active == 'in-active')
                            <span class="badge badge-danger">Non Active</span>
                            @else
                            <span class="badge badge-warning">Proccess</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="Alamat">Deskripsi</label> :
                            <span style="position: relative; left:1rem;">{!! $pekerja->deskripsi !!}</span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Alamat">Lokasi</label> : <br>
                            <ul>
                                @foreach($pekerja->lokasiKerjas as $lk )
                                <li>{{ $lk->kota }} - {{$lk->provinsi}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="Alamat">Keterampilan</label> : <br>
                            <ul>
                                @php $keterampilan = json_decode($pekerja->keterampilan) @endphp
                                @foreach($keterampilan as $ktr )
                                <li>{{$ktr }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="form-group">
                            <label for="Alamat">File Berkas</label> :
                            <div style="position: relative; left:1rem; display:flex; text-align:left;">
                                @foreach($pekerja->fileBerkasPekerjas as $index => $fbp )
                                <a href="{{url($fbp->lokasi)}}" style="text-align:center; margin-right: 3rem;"><i class="fas fa-file" style="font-size: 5rem;"></i><br>{{$fbp->nama_file}}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDetailPekerjaan">Foto Detail Pekerjaan </label> :
                            <div style="display:flex; text-align:left;">
                                @foreach($pekerja->fotoDetailPekerjaans as $fdp)
                                <span style="text-align:center;"><img src="{{url($fdp->foto)}}" alt="" width="50%"></span>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group d-flex" style="position: relative; left:1rem;">
                            <button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#tolakModal"><i class="fas fa-window-close"></i> Tolak</button>
                            <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#nonAktifkanModal"><i class="fas fa-times-circle"></i> Non-Aktifkan</button>
                            <a class="btn btn-success" onclick="prosesData(event, this,'Apakah anda yakin meng-aktifkan akun ini?')" href="{{route('aktif_pekerja', $pekerja->id)}}"><i class="fas fa-check-circle"></i> Terima & Aktifkan</a>
                        </div>
                    </div>
                </div>
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