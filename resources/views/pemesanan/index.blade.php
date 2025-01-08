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
                <button class="btn btn-primary mb-3" onclick="show('<?= route('pemesanan.create') ?>')"><i class="fas fa-plus"></i></i>&nbsp; Tambah Data</button>
                <table id="example1" class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Majikan</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Jumlah</th>
                        <th>Durasi</th>
                        <th>Lokasi</th>
                        <th>Tgl Mulai</th>
                        <th>Jam Kerja</th>
                        <th>Upah</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Kualifikasi</th>
                        <th>Keterampilan</th>
                        <th>Bahasa</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($pemesanans as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->majikan?->user?->name }}</td>
                            <td>{{ $data->jenis_pekerjaan }}</td>
                            <td>{{ $data->jumlah }}</td>
                            <td>{{ $data->durasi }}</td>
                            <td>{{ $data->lokasi }}</td>
                            <td>{{ $data->tgl_mulai }}</td>
                            <td>{{ $data->jam_kerja }}</td>
                            <td>{{ $data->upah }}</td>
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" href="{{route('pemesanan.edit', $data->id)}}"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('pemesanan.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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
