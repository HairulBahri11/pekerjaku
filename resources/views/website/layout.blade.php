<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('temp-website/dist/main.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header Area Start -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-top-wrapper">
                            <div class="header-top-info">
                                <div class="email">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.95" height="13.4"
                                            viewBox="0 0 16.95 13.4">
                                            <g id="Mail" transform="translate(0.975 0.7)">
                                                <path id="Path_1" data-name="Path 1"
                                                    d="M3.5,4h12A1.5,1.5,0,0,1,17,5.5v9A1.5,1.5,0,0,1,15.5,16H3.5A1.5,1.5,0,0,1,2,14.5v-9A1.5,1.5,0,0,1,3.5,4Z"
                                                    transform="translate(-2 -4)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                                <path id="Path_2" data-name="Path 2" d="M17,6,9.5,11.25,2,6"
                                                    transform="translate(-2 -4.5)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>olog.wetbise@mail.com</span>
                                    </div>
                                </div>
                                <div class="cta">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.401" height="13.401"
                                            viewBox="0 0 13.401 13.401">
                                            <g id="Phone_Icon" data-name="Phone Icon" transform="translate(0.7 0.7)">
                                                <path id="Phone_Icon-2" data-name="Phone Icon"
                                                    d="M14.111,10.984v1.806A1.206,1.206,0,0,1,12.8,14a11.956,11.956,0,0,1-5.207-1.849,11.754,11.754,0,0,1-3.62-3.613A11.9,11.9,0,0,1,2.117,3.313,1.205,1.205,0,0,1,3.317,2h1.81A1.206,1.206,0,0,1,6.334,3.036a7.719,7.719,0,0,0,.422,1.692A1.2,1.2,0,0,1,6.485,6l-.766.765a9.644,9.644,0,0,0,3.62,3.613l.766-.765a1.208,1.208,0,0,1,1.273-.271,7.76,7.76,0,0,0,1.7.422,1.205,1.205,0,0,1,1.038,1.222Z"
                                                    transform="translate(-2.112 -2)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>+8801658 874521</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="d-none d-lg-block">
                    <nav class="menu-area d-flex align-items-center">
                        <div class="logo">
                            <a href="#"><img src="{{ url('assets/img/logo.png')}}" width="100" alt="logo" /></a>
                        </div>
                        <ul class="main-menu d-flex align-items-center">
                            <li><a class="{{  $title == 'Home' ? 'active' : ''}}" href="{{route('home.website')}}">Home</a></li>
                            <li>
                                <a href="javascript:void(0)" class="{{   Request::is('*home_latar_belakang*')  ? 'active' : ''}}">Latar Belakang
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                        viewBox="0 0 9.98 5.69">
                                        <g id="Arrow" transform="translate(0.99 0.99)">
                                            <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                                transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                        </g>
                                    </svg>
                                </a>
                                <?php $latarBelakang = App\Models\LatarBelakang::orderBy('created_at', 'desc')->get() ?>
                                <ul class="sub-menu">
                                    @foreach($latarBelakang as $lb)
                                    <li><a href="{{route('home_latar_belakang', $lb->id)}}">{{$lb->latar_belakang}}</a></li>
                                    @endforeach
                                </ul>
                            <li>
                                <a href="javascript:void(0)" class="{{   Request::is('*home_profesi*')  ? 'active' : ''}}">Profesi
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                        viewBox="0 0 9.98 5.69">
                                        <g id="Arrow" transform="translate(0.99 0.99)">
                                            <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                                transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                        </g>
                                    </svg>
                                </a>
                                <?php $profesi = App\Models\Profesi::orderBy('created_at', 'desc')->get() ?>
                                <ul class="sub-menu">
                                    @foreach($profesi as $p)
                                    <li><a href="{{route('home_profesi', $p->id)}}">{{$p->profesi}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                        <div class="search-bar">
                            <input type="text" placeholder="Search Worker..." />
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8"
                                            rx="8.158" ry="8" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5"
                                            transform="translate(14.431 14.5)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="menu-icon ml-auto">
                            <ul>
                                <li>
                                    @if(Auth::user())
                                    <a href="{{route('dashboard')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M280.4 148.3L96 300.1V464a16 16 0 0 0 16 16l112.1-.3a16 16 0 0 0 15.9-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.6a16 16 0 0 0 16 16.1L464 480a16 16 0 0 0 16-16V300L295.7 148.3a12.2 12.2 0 0 0 -15.3 0zM571.6 251.5L488 182.6V44.1a12 12 0 0 0 -12-12h-56a12 12 0 0 0 -12 12v72.6L318.5 43a48 48 0 0 0 -61 0L4.3 251.5a12 12 0 0 0 -1.6 16.9l25.5 31A12 12 0 0 0 45.2 301l235.2-193.7a12.2 12.2 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0 -1.7-16.9z" />
                                        </svg>
                                    </a>
                                    @else
                                    <a href="{{route('dashboard')}}" style="color:#000;">
                                        Login/Register
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Mobile Menu -->
                <aside class="d-lg-none">
                    <div id="mySidenav" class="sidenav">
                        <div class="close-mobile-menu">
                            <a href="javascript:void(0)" id="menu-close" class="closebtn"
                                onclick="closeNav()">&times;</a>
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Search Worker..." />
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8"
                                            rx="8.158" ry="8" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5"
                                            transform="translate(14.431 14.5)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <li>
                            <a href="javascript:void(0)" class="{{   Request::is('*home_latar_belakang*')  ? 'active' : ''}}">Latar Belakang
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                    viewBox="0 0 9.98 5.69">
                                    <g id="Arrow" transform="translate(0.99 0.99)">
                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                            transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                    </g>
                                </svg>
                            </a>
                            <?php $latarBelakang = App\Models\LatarBelakang::orderBy('created_at', 'desc')->get() ?>
                            <ul class="sub-menu">
                                @foreach($latarBelakang as $lb)
                                <li><a href="{{route('home_latar_belakang', $lb->id)}}">{{$lb->latar_belakang}}</a></li>
                                @endforeach
                            </ul>
                        <li>
                            <a href="javascript:void(0)" class="{{   Request::is('*home_profesi*')  ? 'active' : ''}}">Profesi
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                    viewBox="0 0 9.98 5.69">
                                    <g id="Arrow" transform="translate(0.99 0.99)">
                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                            transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                    </g>
                                </svg>
                            </a>
                            <?php $profesi = App\Models\Profesi::orderBy('created_at', 'desc')->get() ?>
                            <ul class="sub-menu">
                                @foreach($profesi as $p)
                                <li><a href="{{route('home_profesi', $p->id)}}">{{$p->profesi}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </div>
                    <div class="mobile-nav d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="{{ url('assets/img/logo.png')}}" width="100" alt="logo" /></a>
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Search Worker..." />
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M280.4 148.3L96 300.1V464a16 16 0 0 0 16 16l112.1-.3a16 16 0 0 0 15.9-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.6a16 16 0 0 0 16 16.1L464 480a16 16 0 0 0 16-16V300L295.7 148.3a12.2 12.2 0 0 0 -15.3 0zM571.6 251.5L488 182.6V44.1a12 12 0 0 0 -12-12h-56a12 12 0 0 0 -12 12v72.6L318.5 43a48 48 0 0 0 -61 0L4.3 251.5a12 12 0 0 0 -1.6 16.9l25.5 31A12 12 0 0 0 45.2 301l235.2-193.7a12.2 12.2 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0 -1.7-16.9z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8"
                                            rx="8.158" ry="8" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5"
                                            transform="translate(14.431 14.5)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="menu-icon">
                            <ul>
                                <li>
                                    @if(Auth::user())
                                    <a href="{{route('dashboard')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path d="M280.4 148.3L96 300.1V464a16 16 0 0 0 16 16l112.1-.3a16 16 0 0 0 15.9-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.6a16 16 0 0 0 16 16.1L464 480a16 16 0 0 0 16-16V300L295.7 148.3a12.2 12.2 0 0 0 -15.3 0zM571.6 251.5L488 182.6V44.1a12 12 0 0 0 -12-12h-56a12 12 0 0 0 -12 12v72.6L318.5 43a48 48 0 0 0 -61 0L4.3 251.5a12 12 0 0 0 -1.6 16.9l25.5 31A12 12 0 0 0 45.2 301l235.2-193.7a12.2 12.2 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0 -1.7-16.9z" />
                                        </svg>
                                    </a>
                                    @else
                                    <a href="{{route('dashboard')}}" style="color:#000;">
                                        Login/Register
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="hamburger-menu">
                            <a style="font-size: 30px; cursor: pointer" onclick="openNav()">&#9776;</a>
                        </div>
                    </div>
                </aside>
                <!-- Body overlay -->
                <div class="overlay" id="overlayy"></div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="main-footer-info">
                        <img src="dist/images/logo/white.png" alt="Logo" class="img-fluid" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            molestie malesuada metus, non molestie ligula laoreet vitae. Ut
                            et fringilla risus, vel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Company</h6>
                        <ul class="quicklink">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help &amp; Support</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Quick links</h6>
                        <ul class="quicklink">
                            <li><a href="#">New Realease</a></li>
                            <li><a href="#">Customize</a></li>
                            <li><a href="#">Sale &amp; Discount</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="main-footer-quicklinks">
                        <h6>Account</h6>
                        <ul class="quicklink">
                            <li><a href="#">Your Bag</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Order Completed</a></li>
                            <li><a href="#">Log-out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-flex justify-content-between align-items-center">
                        <div class="copyright-text order-2 order-lg-1">
                            <p>
                                &copy; 2020. Design and Developed by
                                <a href="#">Zakir Soft</a>
                            </p>
                        </div>
                        <div class="copyright-links order-1 order-lg-2">
                            <a href="#" class="ml-0"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

    <script src="{{ asset('temp-website/src/js/jquery.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/scss/vendors/plugin/js/slick.min.js') }}"></script>
    <script src="{{ asset('temp-website/src/scss/vendors/plugin/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('temp-website/dist/main.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "350px";
            $("#overlayy").addClass("active");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $("#overlayy").removeClass("active");
        }
    </script>
</body>

</html>