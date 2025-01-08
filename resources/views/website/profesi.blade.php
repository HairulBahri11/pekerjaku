@extends('website.layout')
@section('content')
<main>
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
                        <h2>Profesi {{$title}}</h2>
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
    <!-- Populer Product End -->
    <!-- Categorys Section End -->

    <!-- Features Section Start -->

    <!-- Features Section End -->
</main>
@endsection