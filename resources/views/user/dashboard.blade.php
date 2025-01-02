@extends('layouts.sidebar')

@section('content')
<section class="content">
    <div class="container-fluid">
        <h2>Selamat Datang {{Auth::user()->name}}</h2>
       
    </div><!-- /.container-fluid -->
</section>
@endsection
