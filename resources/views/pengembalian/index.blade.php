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
                <a class="btn btn-danger mt-1" href="{{route('cetak_pengembalian')}}"><i class="fas fa-print"></i>&nbsp;&nbsp;Cetak Laporan</a>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Buku</th>
                            <th>Kelas</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Jatuh Tempo</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach($data as $data)
                        <tr>
                            <td style="width: 30px;">{{ $i++ }}</td>
                            <td>{{ $data->peminjaman?->siswa?->nama }}</td>
                            <td>{{ $data->peminjaman?->buku?->judul_buku }}</td>
                            <td>{{ $data->peminjaman?->siswa?->kelas }}</td>
                            <td>{{ $data->peminjaman?->tgl_peminjaman }}</td>
                            <td>{{ $data->peminjaman?->tgl_jatuh_tempo }}</td>
                            <td>{{ ($data->tanggal_pengembalian) ? $data->tanggal_pengembalian : '-' }}</td>
                            <td>Rp. {{number_format($data->denda, 0, ",", ".")}}</td>
                            <td style="width: 230px;">

                                <button class="btn btn-info btn-sm mt-1" onclick="show('<?= route('pengembalian.edit', $data->id) ?>')"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</button>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('pengembalian.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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
