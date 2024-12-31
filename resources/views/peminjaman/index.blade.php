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
                <button class="btn btn-primary mb-3" onclick="show('<?= route('peminjaman.create') ?>')"><i class="fas fa-plus"></i></i>&nbsp; Tambah Data</button>
                <a class="btn btn-danger mb-3 ml-2" href="{{route('cetak_peminjaman')}}"><i class="fas fa-print"></i>&nbsp;&nbsp;Cetak Laporan</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Buku</th>
                            <th>Kelas</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach($data as $data)
                        <tr>
                            <td style="width: 30px;">{{ $i++ }}</td>
                            <td>{{ $data->siswa?->nama }}</td>
                            <td>{{ $data->buku?->judul_buku }}</td>
                            <td>{{ $data->siswa?->kelas }}</td>
                            <td>{{ $data->tgl_peminjaman }}</td>
                            <td>{{ $data->tgl_jatuh_tempo }}</td>
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" href="{{route('peminjaman.edit', $data->id)}}"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                @if($data->pengembalian?->id == null)
                                <button class="btn btn-warning btn-sm mt-1" onclick="show('<?= route('kembalikan_buku', $data->id) ?>')"><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Kembalikan Buku</button>
                                @endif
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('peminjaman.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection
