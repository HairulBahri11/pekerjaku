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
                <button class="btn btn-primary mb-3" onclick="show('<?= route('siswa.create') ?>')"><i class="fas fa-plus"></i></i>&nbsp; Tambah Data</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>No HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach($data as $data)
                        <tr>
                            <td style="width: 30px;">{{ $i++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" href="{{route('siswa.edit', $data->id)}}"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('siswa.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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