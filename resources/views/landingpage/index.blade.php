<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Landing Page Rental Mobil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('welcome/img/favicon.png')}}" rel="icon">
  <link href="{{asset('welcome/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('welcome/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('welcome/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('welcome/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('welcome/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@velocar.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(021)6519300</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Velocar</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          
          <ul>
            <li><a href="#hero" class="active">Beranda</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#services">Pelayanan</a></li>
            <li><a href="#portfolio">Galeri Kami</a></li>
            <li><a href="#team">Tim</a></li> 
            <li><a href="#contact">Kontak</a></li>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="btn-login">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}t" class="btn-daftar">Register</a>
            @endif
            @endauth
            @endif
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
  
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to <span>Velocar</span></h1>
            <p>Kenyamanan disetiap Perjalanan</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Rental Sekarang</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

   

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
        <p><span>Kenali Lebih Dekat</span> <span class="description-title">Velocar</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('welcome/img/rental.jpg')}}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Selamat Datang di Velocar</h3>
              <p>Velocar adalah penyedia layanan rental mobil terpercaya yang berdedikasi untukmemberikan pengalaman berkendara yang nyaman dan aman. Kami menawarkanberbagai pilihan kendaraan yang terawat dengan baik untuk memenuhi kebutuhanperjalanan Anda, baik untuk bisnis maupun liburan.</p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

 <!-- Featured Services Section -->
 <section id="featured-services" class="featured-services section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="" class="stretched-link">VISI</a></h4>
          <p>Menjadi penyedia layanan rental mobil terpercaya dan terbaik di Indonesia, dengan
            mengutamakan kualitas, keamanan, dan kenyamanan bagi setiap pelanggan</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="" class="stretched-link">MISI</a></h4>
          <p>1. Memberikan pelayanan yang ramah, profesional, dan responsif</p>
          <p>2. Menyediakan armada mobil yang terawat dan berkualitas tinggi</p>
          <p>3. Menyusun harga sewa yang kompetitif dan transparan</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="stretched-link">Layanan Utama</a></h4>
          <p>1. Sewa Mobil Harian</p>
          <p>2. Sewa Mobil Bulanan</p>
          <p>3. Sewa Mobil untuk Acara Khusus</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">Tim Manajemen</a></h4>
          <p>1. Marsela, CEO</p>
          <p>2. Dzakiah Nur Aini, CFO</p>
          <p>3. Swatu Sholat Asky, COO</p>
          <p>4. Fajar Nurzaman, CMO</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Featured Services Section -->  
    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="333" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pelanggan Puas</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="678" data-purecounter-duration="1" class="purecounter"></span>
              <p>Peminjaman</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Jam Terbang</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
              <p>Karyawan</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/HONDA.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/HYUNDAI.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/ISUZU.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/JEEP.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/MITSUBISHI.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/DAIHATSU.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/suzuki.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/toyota.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/LEXUS.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('welcome/img/clients/MAZDA.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pelayanan</h2>
        <p><span class="description-title">Pelayanan Prima</span></p>
        <p>Untuk Setiap Perjalanan Anda</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Layanan Pengiriman Mobil</h3>
              </a>
              <p>Pengantaran mobil ke lokasi Anda untuk kenyamanan maksimal</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Pemesanan Online</h3>
              </a>
              <p>Kemudahan pemesanan mobil secara onlinemelalui website kami</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Layanan 24/7</h3>
              </a>
              <p>Dukungan dan bantuan pelanggan tersedia 24 jam sehari, 7 hari seminggu</p>
            </div>
          </div><!-- End Service Item -->

          
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="{{asset('welcome/img/testimonials-bg.jpg')}}" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('welcome/img/testimonials/testimonials-1.JPG')}}" class="testimonial-img" alt="">
                <h3>Rossa</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Velocar memudahkan perjalanan saya dengan mobil berkualitas dan layanan prima. Sangat puas!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('welcome/img/testimonials/testimonials-2.png')}}" class="testimonial-img" alt="">
                <h3>Indah</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pelayanan cepat dan mobilnya selalu dalam kondisi baik. Velocar top!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('welcome/img/testimonials/testimonials-3.JPG')}}" class="testimonial-img" alt="">
                <h3>Haris</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Menyewa mobil di Velocar sangat mudah dan efisien. Sangat direkomendasikan!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('welcome/img/testimonials/testimonials-4.JPG')}}" class="testimonial-img" alt="">
                <h3>Rizky</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Harga terjangkau dan pilihan mobil banyak. Velocar tidak pernah mengecewakan!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('welcome/img/testimonials/testimonials-5.png')}}" class="testimonial-img" alt="">
                <h3>Hendri</h3>
                <h4>Pelanggan</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Pelayanan pelanggan Velocar sangat ramah dan profesional. Sewa mobil jadi menyenangkan!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

   <!-- Portfolio Section -->
   <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Galeri Kami</h2>
      <p>Lihat Galeri Kami</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Bus</li>
          <li data-filter=".filter-product">Minibus</li>
          <li data-filter=".filter-branding">Mobil</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Bus-1.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bus 1</h4>
                <p>Bus 45 Seat</p>
                <a href="{{asset('welcome/img/portfolio/Bus-1.png')}}" title="Bus 45 Seat" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-bus" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Minibus-1.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Minibus 1</h4>
                <p>Hiace</p>
                <a href="{{asset('welcome/img/portfolio/Minibus-1.png')}}" title="Hiace" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-minibus" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Mobil-1.webp')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mobil 1</h4>
                <p>Lexus NX 300</p>
                <a href="{{asset('welcome/img/portfolio/Mobil-1.webp')}}" title="Lexus NX 300" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-mobil" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Bus-2.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bus 2</h4>
                <p>Bus 30 Seat</p>
                <a href="{{asset('welcome/img/portfolio/Bus-2.png')}}" title="Bus 30 Seat" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-bus" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Minibus-2.png')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Minibus 2</h4>
                <p>Elf Short</p>
                <a href="{{asset('welcome/img/portfolio/Minibus-2.png')}}" title="Elf Short" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-minibus" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <div class="portfolio-content h-100">
              <img src="{{asset('welcome/img/portfolio/Mobil-2.webp')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mobil 2</h4>
                <p>Toyota Fortuner</p>
                <a href="{{asset('welcome/img/portfolio/Mobil-2.webp')}}" title="Toyota Fortuner" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="/portofolio-mobil" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Item -->





      </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->


    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tim</h2>
        <p><span>Tim Profesional</span> <span class="description-title">Kami</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('welcome/img/team/team-1.JPEG')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Marsela</h4>
                <span>CEO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('welcome/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dzakiah Nur Aini</h4>
                <span>CFO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('welcome/img/team/team-3.JPG')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Swatu Sholat Asky</h4>
                <span>COO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{asset('welcome/img/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Fajar Nurzaman</h4>
                <span>CMO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p><span>Butuh Bantuan?</span> <span class="description-title">Hubungi atau Kunjungi Kami !</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>Jalan Lenteng Agung Raya No.20, Kec.Jagakarsa, DKI Jakarta 12640</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Hubungi Kami</h3>
                  <p>(021) 4759 603</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>contact@velocar.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175618529776!2d106.83004867355626!3d-6.352919162148884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1720531853877!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama</label>
                  <input type="text" name="name" id="name-field" class="form-control" placeholder="Masukkan nama anda" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" placeholder="Masukkan email anda" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" placeholder="Masukkan subjek" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Pesan</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" placeholder="Masukkan pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Terkirim, Terima Kasih!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Bergabunglah dengan Newsletter Kami</h4>
            <p>Langganan newsletter kami dan terima berita terbaru tentang produk dan layanan kami!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Request untuk Subscribe Terkirim. Terima Kasih!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="d-flex align-items-center">
            <span class="sitename">Velocar</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jalan Lenteng Agung Raya No.20</p>
            <p>Kec.Jagakarsa, DKI Jakarta 12640</p>
            <p class="mt-3"><strong>No. Telepon :</strong> <span>(021) 4759 603</span></p>
            <p><strong>Email :</strong> <span>contact@velocar.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Beranda</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#aboutus">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Pelayanan</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Pelayanan</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Bus</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Mobil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Minibus</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Velocar</strong> <span>Pelayanan Prima untuk Setiap Perjalanan Anda</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Desain Oleh <a href="#">Tim Velocar</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('welcome/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('welcome/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('welcome/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('welcome/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('welcome/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('welcome/js/main.js')}}"></script>

</body>

</html>