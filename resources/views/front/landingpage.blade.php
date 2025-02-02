<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>  السفارة السودانية</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
 
  <!-- Favicons -->
  <link href="{{ asset('css/front/assets/img/BottomLogo.jpg') }}" rel="icon">
  <link href="{{ asset('css/front/assets/img/BottomLogo.jpg') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('css/front/assets/vendor/bootstrap/css/bootstrap.rtl.css') }}" rel="stylesheet">
  <link href="{{ asset('css/front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('css/front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('css/front/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" dir="rtl">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@sudanembassy.org.sa">البريد الإلكتروني</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>0114887979</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">السفارة السودانية<br></h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#" class="active">الرئيسية</a></li>
            <li><a href="#">الخدمات</a></li>
            <li><a href="#">البوابة الرقمية</a></li>
            {{-- <li><a href="#">Portfolio</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li> --}}
            <li><a href="#">التواصل</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset('css/front/assets/img/hero-carousel/image1.jpg') }}" alt="">
          <div class="carousel-container">
            <h2>  البوابة <span>الرقمية</span></h2>
            <p> تقدم السفارة السودانية بالرياض مجموعة من الخدمات المنتظمة وأيضاً الخدمات المؤقتة أو الطارئة للمواطنين السودانيين.            </p>
            <a href="/login" class="btn-get-started"> دخول</a>
          </div>
        </div><!-- End Carousel Item -->
        {{-- 
          <div class="carousel-item">
            <img src="{{ asset('css/front/assets/img/hero-carousel/image1.jpg') }}" alt="">
            <div class="carousel-container">
              <h2>At vero eos et accusamus</h2>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
              <a href="about.html" class="btn-get-started">Get Started</a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="{{ asset('css/front/assets/img/hero-carousel/image1.jpg') }}" alt="">
            <div class="carousel-container">
              <h2>Temporibus autem quibusdam</h2>
              <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
              <a href="about.html" class="btn-get-started">Get Started</a>
            </div>
            </div> 
        --}}

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <div class="featured container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">المعاملات القنصلية</a></h4>
              <p> </p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">  الجوازات والسجل المدني </a></h4>
              <p> </p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">  الملحقية الطبية </a></h4>
              <p> </p>
            </div>
          </div><!-- End Featured Item -->

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    {{-- <section id="about" class="section about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{ asset('css/front/assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p>
          </div>
        </div>

      </div>

    </section> --}}
    <!-- /About Section -->

    <!-- Services Section -->
    {{-- <section id="services" class="services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Nesciunt Mete</h3>
              </a>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Eosle Commodi</h3>
              </a>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Ledo Markt</h3>
              </a>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Asperiores Commodit</h3>
              </a>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Velit Doloremque</h3>
              </a>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Dolori Architecto</h3>
              </a>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section> --}}
    <!-- /Services Section -->

 
  </main>

  <footer id="footer" class="footer position-relative dark-background">

   

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="#" class="d-flex align-items-center">
            <span class="sitename">السفارة السودانية</span>
          </a>
          <div class="footer-contact pt-3">
            <p>الرياض</p>
            <p>حي السفارات</p>
            <p class="mt-3"><strong>الهاتف:</strong> <span>+966114887979</span></p>
            {{-- <p><strong>Email:</strong> <span>info@example.com</span></p> --}}
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>  روابط هامة          </h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">الرئيسية </a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">عن السودان</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">عن السفارة </a></li>
            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">عن مصر</a></li> --}}
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>خدماتنا  </h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#"> الجوازات  </a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">القنصلية  </a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">الثقافية</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">التوثيقات</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>تواصل معنا </h4>
          <p>الأحد - الخميس 9ص - 3م </p>
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
      <p>© <span>جميع الحقوق</span> <strong class="px-1 sitename">محفوظة</strong> <span> 2025</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('css/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('css/front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('css/front/assets/js/main.js') }}"></script>

</body>

</html>