@extends('layouts.app')

@section('template_title')
    Majikan
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Majikan') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('majikans.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Alamat</th>
										<th>Biaya Pendaftaran</th>
										<th>Bukti Pembayaran</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($majikans as $majikan)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $majikan->user_id }}</td>
											<td>{{ $majikan->alamat }}</td>
											<td>{{ $majikan->biaya_pendaftaran }}</td>
											<td>{{ $majikan->bukti_pembayaran }}</td>
											<td>{{ $majikan->status }}</td>

                                            <td>
                                                <form action="{{ route('majikans.destroy',$majikan->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('majikans.show',$majikan->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('majikans.edit',$majikan->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $majikans->links() !!}
            </div>
        </div>
    </div>
@endsection
