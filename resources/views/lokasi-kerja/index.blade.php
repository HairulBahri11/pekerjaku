@extends('layouts.app')

@section('template_title')
    Lokasi Kerja
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lokasi Kerja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lokasi-kerjas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Pekerja Id</th>
										<th>Kota</th>
										<th>Provinsi</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lokasiKerjas as $lokasiKerja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lokasiKerja->pekerja_id }}</td>
											<td>{{ $lokasiKerja->kota }}</td>
											<td>{{ $lokasiKerja->provinsi }}</td>

                                            <td>
                                                <form action="{{ route('lokasi-kerjas.destroy',$lokasiKerja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lokasi-kerjas.show',$lokasiKerja->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lokasi-kerjas.edit',$lokasiKerja->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $lokasiKerjas->links() !!}
            </div>
        </div>
    </div>
@endsection
