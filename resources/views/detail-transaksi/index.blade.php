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
                <button class="btn btn-primary mb-3" onclick="show('<?= route('detail_transaksi.create') ?>')"><i class="fas fa-plus"></i></i>&nbsp; Tambah Data</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead class="thead">
                        <tr>
                            <th>No</th>
                            <th>Transaksi Id</th>
                            <th>Pekerja Id</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($detailTransaksis as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->transaksi_id }}</td>
                            <td>{{ $data->pekerja_id }}</td>
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" href="{{route('detail_transaksi.edit', $data->id)}}"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('detail_transaksi.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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