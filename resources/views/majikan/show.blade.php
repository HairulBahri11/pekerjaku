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
                <div class="form-group">
                    <label for="exampleInputName">Nama</label> : {{$majikan->user?->name}}
                </div>


                <div class="form-group">
                    <label for="exampleInputUsername">Username</label> : {{$majikan->user?->username}}

                </div>

                <div class="form-group">
                    <label for="exampleInputNoHP">No Hp</label> : {{$majikan->user?->no_hp}}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail">Email</label> : {{$majikan->user?->email}}
                </div>

                <div class="form-group">
                    <label for="Alamat">Alamat</label> :
                    <span style="position: relative; left:1rem;">{!! $majikan?->alamat !!}</span>
                </div>
                
                <div class="form-group">
                    <label for="Status">Status Active</label> :
                    @if( $majikan->status == 'active')
                    <span class="badge badge-success">Active</span>
                    @elseif( $majikan->status == 'in-active')
                    <span class="badge badge-danger">Non Active</span>
                    @else
                    <span class="badge badge-warning">Proccess</span>
                    @endif
                </div>


                <div class="form-group">
                    <label for="Alamat">File Berkas</label> :
                    <div style="position: relative; left:1rem; display:flex; text-align:left;">
                        @foreach($majikan->fileBerkasMajikans as $fbm)
                        <a href="{{url($fbm->lokasi)}}" style="text-align:center; margin-right: 3rem;"><i class="fas fa-file" style="font-size: 5rem;"></i><br>{{$fbm->nama_file}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="form-group d-flex" style="position: relative; left:1rem;">
                    <button type="button" class="btn btn-danger mr-2" data-toggle="modal" data-target="#tolakModal"><i class="fas fa-window-close"></i> Tolak</button>
                    <button type="button" class="btn btn-warning mr-2" data-toggle="modal" data-target="#nonAktifkanModal"><i class="fas fa-times-circle"></i> Non-Aktifkan</button>
                    <a class="btn btn-success" onclick="prosesData(event, this,'Apakah anda yakin meng-aktifkan akun ini?')" href="{{route('aktif_majikan', $majikan->id)}}"><i class="fas fa-check-circle"></i> Terima & Aktifkan</a>
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
            <form action="{{route('majikan.update',$majikan->id)}}" method="POST">
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
            <form action="{{route('majikan.update',$majikan->id)}}" method="POST">
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
