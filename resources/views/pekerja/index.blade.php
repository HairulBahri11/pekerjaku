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
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Latar Belakang</th>
                            <th>Profesi</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($pekerjas as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->user?->name }}</td>
                            <td>{{ $data->latarBelakang?->latar_belakang }}</td>
                            <td>{{ $data->profesi?->profesi }}</td>
                            <td>{{ $data->user?->no_hp }}</td>
                            <td>{{ $data->user?->email }}</td>
                            @if( $data->status == 'active')
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-danger">Non Active</span></td>
                            @endif
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" type="button" onclick="<?= route('pekerja.edit', $data->id) ?>"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</a>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('pekerja.destroy',$data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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