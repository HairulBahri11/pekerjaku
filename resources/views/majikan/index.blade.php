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
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Biaya Pendaftaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($majikans as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->user?->name }}</td>
                            <td>{{ $data->user?->no_hp }}</td>
                            <td>{{ $data->user?->email }}</td>
                            <td>Rp. {{number_format($data->biaya_pendaftaran, 0, ',', '.')}}</td>
                            <td><a href="{{url($data->bukti_pembayaran)}}" target="_blank"><img alt="Avatar" width="50" src="{{url($data->bukti_pembayaran)}}"></a></td>
                            <td>
                                @if( $data->status == 'active')
                                <span class="badge badge-success">Active</span>
                                @elseif( $data->status == 'in-active')
                                <span class="badge badge-danger">Non Active</span>
                                @else
                                <span class="badge badge-warning">Proccess</span>
                                @endif
                            </td>
                            <td style="width: 230px;">
                                <a class="btn btn-info btn-sm mt-1" type="button" href="{{route('majikan.show',$data->id)}}"><i class="fas fa-eye"></i>&nbsp;&nbsp;Detail</a>
                                <a class="btn btn-danger btn-sm mt-1" onclick="notificationforDelete(event, this)" href="{{route('majikan.destroy', $data->id)}}"><i class="fas fa-trash"></i>&nbsp;&nbsp; Delete</a>
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
