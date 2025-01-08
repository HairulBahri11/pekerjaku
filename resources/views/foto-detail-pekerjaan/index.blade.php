@extends('layouts.app')

@section('template_title')
    Foto Detail Pekerjaan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Foto Detail Pekerjaan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('foto-detail-pekerjaans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Foto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fotoDetailPekerjaans as $fotoDetailPekerjaan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $fotoDetailPekerjaan->pekerja_id }}</td>
											<td>{{ $fotoDetailPekerjaan->foto }}</td>

                                            <td>
                                                <form action="{{ route('foto-detail-pekerjaans.destroy',$fotoDetailPekerjaan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('foto-detail-pekerjaans.show',$fotoDetailPekerjaan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('foto-detail-pekerjaans.edit',$fotoDetailPekerjaan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $fotoDetailPekerjaans->links() !!}
            </div>
        </div>
    </div>
@endsection
