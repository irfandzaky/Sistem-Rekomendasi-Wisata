{{-- BASE TEMPLATE UNTUK USER BIASA YG SUDAH LOGIN,cuman beda di navbar --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="/image/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/styletemplate.css">
    <link rel="stylesheet" href="/css/ttgkami.css">
    <link href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">

    @stack('mycss')

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div> -->

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Subscribe to my newsletter</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <button type="submit" class="btn original-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">
                        <div class="col-12 col-sm-4">
                            <div class="breaking-news-area">
                                <div id="breakingNewsTicker" class="ticker">
                                    <ul>
                                        <li><a href="/">LU XING</a></li>
                                        <li><a href="/">Amazing Travel!</a></li>
                                        <li><a href="/">Hi Traveller!</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/preferences">Beranda</a></li>
                                    <li><a href="/tentang">Tentang Kami</a></li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
            
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();" style="color: #212121;">
                                                {{ __('Keluar') }}
                                            </a>
            
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="/wisata/cari" method="get">
                                        <input type="text" id="search" name="cari" placeholder="Cari sesuatu..." value="{{ old('cari') }}">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content');

    <hr>
    <p style="text-align:center">Copyright LU XING © 2020. All rights reserved.</p>
    <br>
    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/a.jpg"  width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/b.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/c.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/d.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/e.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/f.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="/image/footerimages/g.jpg" width=100%;>
                <!-- Hover Effects -->
                <!-- <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer id="footer" class="footer-1">
            <div class="main-footer widgets-dark typo-light">
                <div class="container">
                    <div class="row">
    
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget subscribe no-box">
                                <h5 class="widget-title">Didukung Oleh<span></span></h5>
                                <p>Program Studi Informatika <br> Universitas Islam Indonesia <br>
                                    Pengembangan Sistem Informasi</p>
                            </div>      
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Pintasan<span></span></h5>
                                    <ul class="thumbnail-widget">
                                        <li>
                                            <div class="thumb-content"><a href="/preferences">Beranda</a></div>	
                                        </li>
                                        <li>
                                            <div class="thumb-content"><a href="/preferences">Terpopuler</a></div>	
                                        </li>
                                        <li>
                                            <div class="thumb-content"><a href="/preferences">Terbaru</a></div>	
                                        </li>
                                        <li>
                                            <div class="thumb-content"><a href="/tentang">Tentang Kami</a></div>	
                                        </li>
                                    </ul>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h5 class="widget-title">Mulai Sekarang<span></span></h5>
                                <p>Dapatkan info menarik tentang wisata Kab. Sleman</p>
                                <!-- <a class="btn" href="{{ route('register') }}" target="_blank">Daftar Sekarang</a> -->
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="widget no-box">
                                <h1> LU XING </h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>Copyright Lu Xing © 2020. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jsT/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/jsT/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/jsT/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/js/jsT/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/jsT/active.js"></script>

    @stack('myscript')

</body>
</html>
