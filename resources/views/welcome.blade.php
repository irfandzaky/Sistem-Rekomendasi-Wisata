<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal Wisata Kabupaten Sleman</title>
        
        <!--Font-->
        <link rel="icon" href="/image/img/core-img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="font/web-font.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Free Template">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
        
        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normailze.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
        <link href="{{ asset('/css/welcome.css') }}" rel="stylesheet"> 
    </head>
    <body>  
        <header>
            <div class="header">
                <nav class="navigation">
                    <div class="navbar-left">
                        <a href="/preferences">LU XING</a>
                    </div>
                    <div class="navbar-right" >                       
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Beranda</a>     
                            @else
                                <a href="{{ route('login') }}">Masuk</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Daftar</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
               <hr class="divider">
                <div class="video-container">
                    <video autoplay loop muted id="video-bg">
                        <source src="{{URL::asset('/video/videoplayback.mp4')}}" type="video/mp4">
                    </video>
                </div>
            </div>
        </header>

        <hr>
        <p style="text-align:center">Copyright LU XING © 2020. All rights reserved.</p>
        <br>

        <footer id="footer" class="footer-1">
            <div class="main-footer widgets-dark typo-light">
                <div class="container">
                    <div class="row">
    
                        <div class="col-xs-12 col-sm-6 col-md-5">
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
                                <a class="btn" href="{{ route('register') }}" target="_blank">Daftar Sekarang</a>
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
    </body>
</html>
