@extends('website.layout')
@section('content')
<main>

    <!-- Product Details Area Start -->
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="product-slider">
                        <div class="exzoom" id="exzoom">
                            <div class="exzoom_img_box">
                                <ul class="exzoom_img_ul">
                                    <li>
                                        <img src="{{url($data->foto)}}" width="100%">
                                    </li>
                                </ul>
                            </div>
                            <div class="exzoom_nav"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <div class="product-pricelist">
                        <h2>{{$data->name}}</h2>
                        <div class="product-pricelist-ratting">
                            <div class="price"><span>Rp. {{number_format($data->gaji_bulanan, 0, ',', '.')}}</span></div>
                            <div class="star">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li>{{$data->rating}}</li>
                                    <li class="point">({{round($data->total_transaksi)}} Rating)</li>
                                </ul>
                            </div>
                        </div>
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-tentang-pekerja-tab" data-bs-toggle="tab" data-bs-target="#nav-tentang-pekerja" type="button" role="tab" aria-controls="nav-tentang-pekerja" aria-selected="true">Deskripsi</button>
                                <button class="nav-link" id="nav-keterampilan-tab" data-bs-toggle="tab" data-bs-target="#nav-keterampilan" type="button" role="tab" aria-controls="nav-keterampilan" aria-selected="false">Keterampilan</button>
                                <button class="nav-link" id="nav-lokasi-kerja-tab" data-bs-toggle="tab" data-bs-target="#nav-lokasi-kerja" type="button" role="tab" aria-controls="nav-lokasi-kerja" aria-selected="false">Lokasi Kerja</button>
                                <button class="nav-link" id="nav-detail-kerjaan-tab" data-bs-toggle="tab" data-bs-target="#nav-detail-kerjaan" type="button" role="tab" aria-controls="nav-detail-kerjaan" aria-selected="false">Detail Kerjaan</button>
                                <button class="nav-link" id="nav-ulasan-tab" data-bs-toggle="tab" data-bs-target="#nav-ulasan" type="button" role="tab" aria-controls="nav-ulasan" aria-selected="false">Ulasan</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-tentang-pekerja" role="tabpanel" aria-labelledby="nav-tentang-pekerja-tab">

                                <label for="Alamat" class="fw-bold">Deskripsi</label> :
                                <span>{!! $pekerja->deskripsi !!}</span>


                                <label for="Alamat" class="fw-bold">Tentang Pekerja</label> :
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputNoHP">No Hp</label> : {{$pekerja->user?->no_hp}}
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail">Email</label> : {{$pekerja->user?->email}}
                                        </div>

                                        <div class="form-group">
                                            <label for="ProfesiID">Profesi</label> : {{$pekerja->profesi?->profesi}}
                                        </div>

                                        <div class="form-group">
                                            <label for="LatarBelakangID">Latar Belakang</label> : {{$pekerja->latarBelakang?->latar_belakang}}
                                        </div>

                                        <div class="form-group">
                                            <label for="TotalPengalaman">Total Pengalaman</label> : {{$pekerja->total_pengalaman}}
                                        </div>

                                        <div class="form-group">
                                            <label for="PendidikanTerakhir">Pendidikan Terakhir</label> : {{$pekerja->pendidikan_terakhir}}
                                        </div>

                                        <div class="form-group">
                                            <label for="GajiBulanan">Gaji Bulanan</label> : Rp. {{number_format($pekerja->gaji_bulanan, 0, ',', '.')}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="TanggalLahir">Tanggal Lahir</label> : {{$pekerja->tgl_lahir}}
                                        </div>

                                        <div class="form-group">
                                            <label for="Agama">Agama</label> : {{$pekerja->agama}}
                                        </div>

                                        <div class="form-group">
                                            <label for="TinggiBadan">Tinggi Badan (cm)</label> : {{$pekerja->tinggi}}
                                        </div>

                                        <div class="form-group">
                                            <label for="BeratBadan">Berat Badan (Kg)</label> : {{$pekerja->berat}}
                                        </div>

                                        <div class="form-group">
                                            <label for="Suku">Suku</label> : {{$pekerja->suku}}
                                        </div>

                                        <div class="form-group">
                                            <label for="Status">Status</label> : {{$pekerja->status_pribadi}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-keterampilan" role="tabpanel" aria-labelledby="nav-keterampilan-tab">
                                <ul type="circle">
                                    @php $i = 1; $keterampilan = json_decode($pekerja->keterampilan) @endphp
                                    @foreach($keterampilan as $ktr )
                                    <li>{{$i++}}. {{$ktr }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-lokasi-kerja" role="tabpanel" aria-labelledby="nav-lokasi-kerja-tab">
                                <ul>
                                    @php $s = 1; @endphp
                                    @foreach($pekerja->lokasiKerjas as $lk )
                                    <li>{{$s++}}. {{ $lk->kota }} - {{$lk->provinsi}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-detail-kerjaan" role="tabpanel" aria-labelledby="nav-detail-kerjaan-tab">
                                <div style="display:flex; text-align:left;">
                                    @foreach($pekerja->fotoDetailPekerjaans as $fdp)
                                    <span style="text-align:center;"><img src="{{url($fdp->foto)}}" alt="" width="50%"></span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-ulasan" role="tabpanel" aria-labelledby="nav-ulasan-tab">
                                @if(!empty($ulasan->ulasans))
                                @foreach($ulasan->ulasans as $ul)
                                <div class="card" style="padding: 1rem;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{url($ul->detailTransaksi?->transaksi?->pemesanan?->majikan?->user?->foto)}}" width="100%">
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="fw-bold text-dark">{{$ul->detailTransaksi?->transaksi?->pemesanan?->majikan?->user?->name}}<br><span><i class="fas fa-star text-warning mt-2"></i> {{ $ul->rating }}</span></p>
                                            <p>{!! $ul->ulasan !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="product-pricelist-selector-button mt-4">
                            <a class="btn cart-bg" href="{{route('pemesanan.index')}}">Pesan
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Area End -->

    <!-- Features Section Start -->
    <section class="features bg-lightwhite">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            @if(!empty($pekerja_lain))
            <div class="features-wrapper">
                <div class="features-active">
                    @foreach($pekerja_lain as $pl)
                    <div class="product-item">
                        <div class="product-item-image">
                            <a href="{{route('pekerja_detail',$pl->id)}}"><img src="{{url($pl->foto)}}" alt="Product Name"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="product-item-info">
                            <a href="{{route('pekerja_detail', $pl->id)}}">{{$pl->name}}</a>
                            <span>Rp. {{number_format($pl->gaji_bulanan, 0, ',', '.')}}</span><br>
                            <span><i class="fas fa-star text-warning mt-2"></i> {{$pl->rating}}</span>
                            <!-- <del>$999</del> -->
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="slider-arrows">
                    <div class="prev-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828"
                            viewBox="0 0 9.414 16.828">
                            <path id="Icon_feather-chevron-left" data-name="Icon feather-chevron-left"
                                d="M20.5,23l-7-7,7-7" transform="translate(-12.5 -7.586)" fill="none"
                                stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="next-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.414" height="16.828"
                            viewBox="0 0 9.414 16.828">
                            <path id="Icon_feather-chevron-right" data-name="Icon feather-chevron-right"
                                d="M13.5,23l5.25-5.25.438-.437L20.5,16l-7-7" transform="translate(-12.086 -7.586)"
                                fill="none" stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- Features Section End -->
</main>
@endsection