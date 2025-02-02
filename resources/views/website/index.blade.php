@extends('website.layout')
@section('content')
<main>
    <!--Banner Area Start -->
    <section class="banner-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="banner-area__content">
                        <h2>Temukan Pekerja Berkualitas untuk Bisnis Anda</h2>
                        <p>
                            Jaringan luas, pilihan beragam, dan solusi tepat untuk setiap<br> proyek Anda.
                        </p>
                        <a class="btn bg-primary" href="#">Cari Pekerja</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="banner-area__img">
                        <img src="{{ asset('assets/img/img_2.jpg') }}" alt="banner-img"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Area End -->

    <!-- Features Section Start -->

    <!-- Features Section End -->

    <!-- About Area Start -->
    <section class="search">
        <div class="container">
            <div class="row justify-content-center">
                <div class="search-wrapper">
                    <form class="search-wrapper-box">
                        <input type="text" placeholder="Search Heare." />
                        <button class="btn bg-primary" type="submit">SEARCH</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Catagory Search End -->

    <!-- Catagory item start -->
    <section class="categoryitem">
        <div class="container">
            <div class="row justify-content-center">
                <div class="categoryitem-wrapper">
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Category</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Brand</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                    <div class="categoryitem-wrapper-price">
                        <h6>Price</h6>
                        <form class="price-item">
                            <input type="number" placeholder="$ Min" />
                            <span>|</span>
                            <input type="number" placeholder="$ Max" />
                        </form>
                    </div>
                    <div class="categoryitem-wrapper-itembox">
                        <h6>Sort By</h6>
                        <select>
                            <option data-display="Men">Men</option>
                            <option value="1">Men</option>
                            <option value="2">Men</option>
                            <option value="4">Men</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Populer Product Strat -->
    <section class="populerproduct">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Pekerja Popular</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $data)
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-item-image">
                            <a href="{{route('pekerja_detail',$data->id)}}"><img src="{{url($data->foto)}}" alt="Product Name"
                                    class="img-fluid" /></a>
                        </div>
                        <div class="product-item-info">
                            <a href="{{route('pekerja_detail',$data->id)}}">{{$data->name}}</a>
                            <span>Rp. {{number_format($data->gaji_bulanan, 0, ',', '.')}}</span><br>
                            <span><i class="fas fa-star text-warning mt-2"></i> {{$data->rating}}</span>
                            <!-- <del>$999</del> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection