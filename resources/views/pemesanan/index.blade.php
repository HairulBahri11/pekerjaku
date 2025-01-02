@extends('layouts.app')

@section('template_title')
    Pemesanan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pemesanan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pemesanans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Majikan Id</th>
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanans as $pemesanan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pemesanan->majikan_id }}</td>
											<td>{{ $pemesanan->jenis_pekerjaan }}</td>
											<td>{{ $pemesanan->jumlah }}</td>
											<td>{{ $pemesanan->durasi }}</td>
											<td>{{ $pemesanan->lokasi }}</td>
											<td>{{ $pemesanan->tgl_mulai }}</td>
											<td>{{ $pemesanan->jam_kerja }}</td>
											<td>{{ $pemesanan->upah }}</td>
											<td>{{ $pemesanan->deskripsi_pekerjaan }}</td>
											<td>{{ $pemesanan->kualifikasi }}</td>
											<td>{{ $pemesanan->keterampilan }}</td>
											<td>{{ $pemesanan->bahasa }}</td>

                                            <td>
                                                <form action="{{ route('pemesanans.destroy',$pemesanan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pemesanans.show',$pemesanan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pemesanans.edit',$pemesanan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pemesanans->links() !!}
            </div>
        </div>
    </div>
@endsection
