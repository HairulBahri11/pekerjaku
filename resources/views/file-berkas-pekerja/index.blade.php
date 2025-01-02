@extends('layouts.app')

@section('template_title')
    File Berkas Pekerja
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('File Berkas Pekerja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('file-berkas-pekerjas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nama Berkas</th>
										<th>Lokasi</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fileBerkasPekerjas as $fileBerkasPekerja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $fileBerkasPekerja->pekerja_id }}</td>
											<td>{{ $fileBerkasPekerja->nama_berkas }}</td>
											<td>{{ $fileBerkasPekerja->lokasi }}</td>

                                            <td>
                                                <form action="{{ route('file-berkas-pekerjas.destroy',$fileBerkasPekerja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('file-berkas-pekerjas.show',$fileBerkasPekerja->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('file-berkas-pekerjas.edit',$fileBerkasPekerja->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $fileBerkasPekerjas->links() !!}
            </div>
        </div>
    </div>
@endsection
