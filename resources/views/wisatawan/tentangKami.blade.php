@extends('wisatawan.index')

@section('title','Beranda - LU XING')

@push('mycss')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>tentangKami</title>
    <link rel="stylesheet" href="tentangKami/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="tentangKami/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="tentangKami/assets/css/styles.css">
    <link rel="stylesheet" href="tentangKami/assets/css/Team-Grid.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('consula/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('consula/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('consula/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('consula/css/style.css') }}">
    <style>
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 20px;
            font-weight: bold; 
        }
    </style>
@endpush

@section('content')

<div style="clear:both; height:30px;"></div>
    
    <div class="site-section" id="about-section">
        <div class="container">
            <div class="row align-items-lg-center">
            <div class="col-md-6 mb-5 mb-lg-0 position-relative">
                <img src="img/museumerapi.jpg" class="img-fluid" alt="Image">
                <div class="centered">
                    <p style="font-size: 71px; color: #fff;"><b>LU XING</b></p> 
                </div>    
            </div>
            <div class="col-md-5 ml-auto">
                <h3 class="section-sub-title">Tentang Kita</h3>
                <h2 class="section-title mb-3">Apa itu LU XING</h2>
                <p class="mb-4">Sebuah desain aplikasi berbasis web yang difungsikan sebagai sebuah 
                platform untuk merekomendasikan tempat wisata lengkap dengan informasi-informasi detailnya berdasarkan hal yang disukai.
                Melalui platform ini, diharapkan wisatawan akan terbantu dalam merencanakan obyek wisata yang
                akan dikunjunginya.</p>    
            </div>
            </div>
        </div>
    </div>

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Layanan</h3>
            <h2 class="section-title mb-3">Layanan Kami</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-assignment"></span></div>
              <div>
                <h3>Rekomendasi</h3>
                <p>Wisatawan akan mendapatkan rekomendasi tempat wisata lengkap dengan detailnya sesuai dengan kesukaannya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-event_note"></span></div>
              <div>
                <h3>Kegiatan</h3>
                <p>Wisatawan dapat mengetahui kegiatan-kegiatan apa saja yang ada pada obyek wisata.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-calendar"></span></div>
              <div>
                <h3>Event</h3>
                <p>Wisatawan dapat mengetahui event yang akan berlangsung pada suatu obyek wisata.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="team-grid">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Tim Kami </h2>
                <p class="text-center">Team INFORMA&nbsp; </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(tentangKami/assets/img/irfan.jpg)">
                        <div class="cover">
                            <h3 class="name">Irfan Rizq Dzaky Muhammad</h3>
                            <p class="title">18523279</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(tentangKami/assets/img/raihan.png)">
                        <div class="cover">
                            <h3 class="name">Ahmad Raihan Akhdani</h3>
                            <p class="title">18523216 </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(tentangKami/assets/img/Syauqi.jpeg)">
                        <div class="cover">
                            <h3 class="name">Syauqi Maulana Nasrianto</h3>
                            <p class="title">18523207 </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image:url(tentangKami/assets/img/zaki.jpeg)">
                        <div class="cover">
                            <h3 class="name">Muhammad Zaki Naufali</h3>
                            <p class="title">18523276 </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="tentangKami/assets/js/jquery.min.js"></script>
    <script src="tentangKami/assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ asset('consula/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('consula/js/popper.min.js') }}"></script>
    <script src="{{ asset('consula/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('consula/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('consula/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('consula/js/aos.js') }}"></script>
    <script src="{{ asset('consula/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('consula/js/jquery.sticky.js') }}"></script>

    
    <script src="{{ asset('consula/js/main.js') }}"></script>
@endsection