@extends('layouts.app')

@section('template_title')
    Pekerja
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pekerja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pekerjas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>User Id</th>
										<th>Latar Belakang Id</th>
										<th>Profesi Id</th>
										<th>Total Pengalaman</th>
										<th>Pendidikan Terakhir</th>
										<th>Gaji Bulanan</th>
										<th>Tgl Lahir</th>
										<th>Agama</th>
										<th>Deskripsi</th>
										<th>Tinggi</th>
										<th>Berat</th>
										<th>Suku</th>
										<th>Status</th>
										<th>Status Pribadi</th>
										<th>Status Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pekerjas as $pekerja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pekerja->user_id }}</td>
											<td>{{ $pekerja->latar_belakang_id }}</td>
											<td>{{ $pekerja->profesi_id }}</td>
											<td>{{ $pekerja->total_pengalaman }}</td>
											<td>{{ $pekerja->pendidikan_terakhir }}</td>
											<td>{{ $pekerja->gaji_bulanan }}</td>
											<td>{{ $pekerja->tgl_lahir }}</td>
											<td>{{ $pekerja->agama }}</td>
											<td>{{ $pekerja->deskripsi }}</td>
											<td>{{ $pekerja->tinggi }}</td>
											<td>{{ $pekerja->berat }}</td>
											<td>{{ $pekerja->suku }}</td>
											<td>{{ $pekerja->status }}</td>
											<td>{{ $pekerja->status_pribadi }}</td>
											<td>{{ $pekerja->status_active }}</td>

                                            <td>
                                                <form action="{{ route('pekerjas.destroy',$pekerja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pekerjas.show',$pekerja->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pekerjas.edit',$pekerja->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pekerjas->links() !!}
            </div>
        </div>
    </div>
@endsection
