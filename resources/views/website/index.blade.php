@extends('website.layout')
@section('content')
    <main>
        <!--Banner Area Start -->
        <section class="banner-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="banner-area__content">
                            <h2>Premium care for premium people.</h2>
                            <p>
                                Not ready for a subscription? Shop all a la carté skin, hair,
                                and body care.
                            </p>
                            <a class="btn bg-primary" href="#">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="banner-area__img">
                            <img src="{{ asset('temp-website/dist/images/banner.jpg') }}" alt="banner-img"
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
                            <h2>Popular Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/01.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">PUMA air max 97</a>
                                <span>$975</span> <del>$999</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/02.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Echo Studio. Amazon Echo Studio</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/03.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Corning Sunglasses for Men.</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/04.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Canon PowerShot SX540</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/05.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">BERRY TYPE-II: C1N Backpack</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/06.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Kauri Marine Blue (Green Sole)</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/07.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Full Set for photographer</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/08.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Face Masks,Face Masks of 50 Pack</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item-image">
                                <a href="product-details.html"><img src="dist/images/product/09.jpg" alt="Product Name"
                                        class="img-fluid" /></a>
                                <div class="cart-icon">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.75" height="16.75"
                                            viewBox="0 0 16.75 16.75">
                                            <g id="Your_Bag" data-name="Your Bag" transform="translate(0.75)">
                                                <g id="Icon" transform="translate(0 1)">
                                                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(4.773 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.682"
                                                        cy="0.714" rx="0.682" ry="0.714"
                                                        transform="translate(12.273 13.571)" fill="none"
                                                        stroke="#1a2224" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                    <path id="Path_3" data-name="Path 3"
                                                        d="M1,1H3.727l1.827,9.564a1.38,1.38,0,0,0,1.364,1.15h6.627a1.38,1.38,0,0,0,1.364-1.15L16,4.571H4.409"
                                                        transform="translate(-1 -1)" fill="none" stroke="#1a2224"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="product-item-info">
                                <a href="product-details.html">Fossil Men's Nate Stainless Steel Chronograph Quartz
                                    Watch</a>
                                <span>$175</span> <del>$199</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Populer Product End -->
        <!-- Categorys Section End -->

        <!-- Features Section Start -->

        <!-- Features Section End -->
    </main>
@endsection
