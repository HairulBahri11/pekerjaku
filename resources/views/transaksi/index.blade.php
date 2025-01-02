@extends('layouts.app')

@section('template_title')
    Transaksi
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transaksi') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transaksis.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Pemesanan Id</th>
										<th>Biaya Admin</th>
										<th>Metode Pembayaran</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksis as $transaksi)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transaksi->pemesanan_id }}</td>
											<td>{{ $transaksi->biaya_admin }}</td>
											<td>{{ $transaksi->metode_pembayaran }}</td>
											<td>{{ $transaksi->status }}</td>

                                            <td>
                                                <form action="{{ route('transaksis.destroy',$transaksi->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transaksis.show',$transaksi->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transaksis.edit',$transaksi->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $transaksis->links() !!}
            </div>
        </div>
    </div>
@endsection
