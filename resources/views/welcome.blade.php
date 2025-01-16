<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Joaquin Academy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/gg.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  * Plus +=+
  * Joaquin Academy Highschool made by Tesseract
  ======================================================== -->
</head>

<body class="index-page">

    @include('components.navba')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="assets/svg/school.svg" class="img-fluid animated" alt="">
        <h1>Welcome to <span>Joaquin Academy</span></h1>
        <p>Kami ucapkan sambutan hangat untuk pengunjung situs Joaquin Academy Highschool.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang kami</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-6" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/mengenang.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Yuk, mendalami Joaquin Academy lebih dalam</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Kurikulum</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Fasilitas</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Biaya</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-tab1">

                <p class="fst-italic">Joaquin menyediakan kurikulum pembelajaran yang berorientasi pada tiga point dibawah ini, sehingga memaksimalkan pendidikan peserta didik hingga titik terbaiknya.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Sosialisasi</h4>
                </div>
                <p>Mempelajari berbagai ilmu sosiologi seperti cara pikir effisien, public speaking, dan keberanian untuk mengutarakan pendapat inovatif.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Psikologi</h4>
                </div>
                <p>Mendidik peserta didik untuk mengembangkan psikologi mereka dan membuat mereka teguh pada pendirian dan tak goyah dan independen secara pemikiran psikologi.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ilmu Pengetahuan.</h4>
                </div>
                <p>Tak lupa, kami juga mengajarkan tentang ilmu pengetahuan dari yang umum bahkan hingga titik spesifik secara mendalam di bidang favoritnya.</p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-tab2">

                <p class="fst-italic">Dengan menyediakan fasilitas yang lengkap, peserta didik mampu melakukan hal baru tanpa terbatas oleh fasilitas yang tak lengkap.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Laboratorium Komputer</h4>
                </div>
                <p>Menggunakan teknologi yang terbarui, komputer di Joaquin Academy Highschool menggunakan hardware yang memungkinkan untuk melakukan rendering dan coding dengan cepat.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ekstrakulikuler dan Klub</h4>
                </div>
                <p>Menyediakan Ekskul dan Klub untuk membantu peserta didik bersosialisasi dan mengembangkan minat bakatnya masing masing.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ruangan yang nyaman.</h4>
                </div>
                <p>Meja yang bersih dan ruangan yang sejuk memungkinkan untuk peserta didik belajar dengan fokus dan serius tanpa khawatir gerah maupun jijik.</p>

              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-tab3">

                <p class="fst-italic">Biaya yang terjangkau, tidak membuat orang tua dari peserta didik merasa takut berhenti di tengah masa sekolah.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Beasiswa</h4>
                </div>
                <p>Menghadirkan Beasiswa untuk siswa berprestasi hingga sekolah dengan potongan harga bahkan hingga tamat sekolah.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Ekonomis</h4>
                </div>
                <p>Harga lebih murah dibandingkan dengan Sekolah swasta lainnya.</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /About Section -->
    
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Featured Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Alias sunt quas <em>Cupiditate</em> oluptas hic minima</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn align-self-start" href="#">Call To Action</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/cta.jpg" alt="" class="img-fluid">
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action Section -->
<!-- Onfocus Section -->

    <section id="onfocus" class="onfocus section dark-background">

    <div class="container-fluid p-0" data-aos="fade-up">
  
      <div class="row g-0">
        <div class="col-lg-6 video-play position-relative">
          <a href="https://youtu.be/1Fpivi5ljhI?si=jOelHCdGOhC7TLY4" class="glightbox pulsating-play-btn"></a>
        </div>
        <div class="col-lg-6">
          <div class="content d-flex flex-column justify-content-center h-100">
            <h3>Manfaat Bersekolah dan Berkuliah di Joaquin Academy</h3>
            <p class="fst-italic">
              Joaquin Academy Highschool menyediakan lingkungan pendidikan yang inovatif dan mendukung pengembangan keterampilan serta potensi setiap siswa untuk masa depan yang gemilang.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Program kurikulum yang dirancang untuk mengintegrasikan teori dan praktik secara seimbang.</li>
              <li><i class="bi bi-check-circle"></i> Fasilitas modern dan teknologi terkini yang mendukung proses pembelajaran.</li>
              <li><i class="bi bi-check-circle"></i> Dosen dan pengajar yang kompeten, berdedikasi, dan berpengalaman di bidang masing-masing.</li>
              <li><i class="bi bi-check-circle"></i> Kesempatan magang dan kerja sama dengan institusi serta perusahaan terkemuka.</li>
              <li><i class="bi bi-check-circle"></i> Dukungan penuh terhadap kegiatan ekstrakurikuler untuk membentuk karakter siswa yang tangguh dan kreatif.</li>
            </ul>
            <a href="#" class="read-more align-self-start"><span>Pelajari Lebih Lanjut</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
  
    </div>
  
    </section><!-- /Onfocus Section -->

  <!-- Features Section -->
  <section id="features" class="features section">

    <div class="container" data-aos="fade-up">

      <ul class="nav nav-tabs row gy-4 d-flex">

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
            <i class="bi bi-book" style="color: #0dcaf0;"></i>
            <h4>Kurikulum Inovatif</h4>
          </a>
        </li><!-- End Tab 1 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
            <i class="bi bi-building" style="color: #6610f2;"></i>
            <h4>Fasilitas Modern</h4>
          </a>
        </li><!-- End Tab 2 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
            <i class="bi bi-people" style="color: #20c997;"></i>
            <h4>Pengajar Kompeten</h4>
          </a>
        </li><!-- End Tab 3 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
            <i class="bi bi-briefcase" style="color: #df1529;"></i>
            <h4>Program Magang</h4>
          </a>
        </li><!-- End Tab 4 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
            <i class="bi bi-trophy" style="color: #0d6efd;"></i>
            <h4>Ekstrakurikuler</h4>
          </a>
        </li><!-- End Tab 5 Nav -->

        <li class="nav-item col-6 col-md-4 col-lg-2">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
            <i class="bi bi-globe" style="color: #fd7e14;"></i>
            <h4>Jaringan Global</h4>
          </a>
        </li><!-- End Tab 6 Nav -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane fade active show" id="features-tab-1">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Kurikulum Inovatif</h3>
              <p class="fst-italic">
                Kurikulum di Joaquin Academy dirancang untuk memadukan teori dan praktik, membantu siswa memahami konsep sekaligus menerapkannya dalam kehidupan nyata.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Integrasi teknologi modern dalam pembelajaran.</li>
                <li><i class="bi bi-check-circle-fill"></i> Pendekatan pembelajaran berbasis proyek (project-based learning).</li>
                <li><i class="bi bi-check-circle-fill"></i> Fokus pada pengembangan keterampilan abad ke-21.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/features-curriculum.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 1 -->

        <div class="tab-pane fade" id="features-tab-2">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Fasilitas Modern</h3>
              <p>
                Dengan fasilitas lengkap dan modern, Joaquin Academy mendukung pengalaman belajar yang nyaman dan efektif bagi setiap siswa.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Laboratorium sains dan teknologi yang mutakhir.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ruang kelas yang dilengkapi dengan perangkat multimedia.</li>
                <li><i class="bi bi-check-circle-fill"></i> Perpustakaan digital dengan akses ke berbagai sumber belajar.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-facilities.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 2 -->

        <div class="tab-pane fade" id="features-tab-3">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Pengajar Kompeten</h3>
              <p>
                Tim pengajar di Joaquin Academy terdiri dari para profesional yang berpengalaman dan berdedikasi tinggi dalam bidangnya.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Pendekatan pembelajaran yang personal dan interaktif.</li>
                <li><i class="bi bi-check-circle-fill"></i> Pelatihan dan pengembangan profesional secara berkala.</li>
                <li><i class="bi bi-check-circle-fill"></i> Dukungan akademik yang holistik untuk setiap siswa.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-teachers.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 3 -->

        <div class="tab-pane fade" id="features-tab-4">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Program Magang</h3>
              <p>
                Joaquin Academy bekerja sama dengan berbagai perusahaan untuk menyediakan program magang yang memberikan pengalaman dunia kerja nyata.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Magang di perusahaan terkemuka di dalam dan luar negeri.</li>
                <li><i class="bi bi-check-circle-fill"></i> Dukungan karir melalui bimbingan dan pelatihan.</li>
                <li><i class="bi bi-check-circle-fill"></i> Kesempatan membangun jaringan profesional sejak dini.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-internship.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 4 -->

        <div class="tab-pane fade" id="features-tab-5">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Ekstrakurikuler</h3>
              <p>
                Joaquin Academy menyediakan berbagai kegiatan ekstrakurikuler untuk mendukung pengembangan minat dan bakat siswa.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Klub olahraga, seni, dan sains yang beragam.</li>
                <li><i class="bi bi-check-circle-fill"></i> Kompetisi dan festival yang diadakan secara rutin.</li>
                <li><i class="bi bi-check-circle-fill"></i> Dukungan penuh untuk pengembangan bakat siswa.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-extracurricular.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 5 -->

        <div class="tab-pane fade" id="features-tab-6">
          <div class="row gy-4">
            <div class="col-lg-8 order-2 order-lg-1">
              <h3>Jaringan Global</h3>
              <p>
                Joaquin Academy memiliki koneksi dengan institusi pendidikan dan perusahaan global untuk membuka peluang yang lebih luas bagi siswa.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Program pertukaran pelajar internasional.</li>
                <li><i class="bi bi-check-circle-fill"></i> Akses ke seminar dan konferensi global.</li>
                <li><i class="bi bi-check-circle-fill"></i> Kerja sama dengan universitas ternama di dunia.</li>
              </ul>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 text-center">
              <img src="assets/img/features-global-network.svg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End Tab Content 6 -->

      </div>

    </div>

  </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>Kejurusan Kami</h2>
        <p>Pilihan program studi yang dirancang untuk membentuk masa depan cerah para siswa di Akademi Joaquin Highschool.</p>
        </div><!-- End Section Title -->
    
        <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row gy-5">
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-1.jpg" class="img-fluid" alt="Teknologi Informasi">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-laptop"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Teknologi Informasi</h3>
                </a>
                <p>Mempelajari dasar-dasar pengembangan perangkat lunak, jaringan komputer, dan keamanan siber untuk era digital.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-2.jpg" class="img-fluid" alt="Kewirausahaan">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-briefcase"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Kewirausahaan</h3>
                </a>
                <p>Melatih siswa untuk menjadi pemimpin bisnis dengan kemampuan inovasi, manajemen, dan pengembangan usaha.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-3.jpg" class="img-fluid" alt="Desain Grafis & Multimedia">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-palette"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Desain Grafis & Multimedia</h3>
                </a>
                <p>Mengembangkan kreativitas siswa melalui seni visual, animasi, dan desain interaktif untuk berbagai media.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-4.jpg" class="img-fluid" alt="Ilmu Komunikasi">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-mic"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Ilmu Komunikasi</h3>
                </a>
                <p>Belajar membangun hubungan yang kuat melalui komunikasi efektif, jurnalistik, dan hubungan masyarakat.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-5.jpg" class="img-fluid" alt="Sains & Teknologi">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-flask"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Sains & Teknologi</h3>
                </a>
                <p>Menyediakan dasar pengetahuan di bidang sains untuk menciptakan inovasi dan solusi teknologi masa depan.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
                <div class="img">
                <img src="assets/img/services-6.jpg" class="img-fluid" alt="Manajemen Keuangan">
                </div>
                <div class="details position-relative">
                <div class="icon">
                    <i class="bi bi-currency-exchange"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                    <h3>Manajemen Keuangan</h3>
                </a>
                <p>Melatih siswa dalam mengelola sumber daya finansial secara efektif untuk kebutuhan pribadi maupun perusahaan.</p>
                </div>
            </div>
            </div><!-- End Service Item -->
    
        </div>
    
        </div>
    
    </section><!-- /Services Section -->
    
        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Alumni</h2>
            <p>Ucap para alumni Joaquin Academy Highschool</p>
        </div><!-- End Section Title -->

        <img src="assets/img/bg-alum.jpg" class="testimonials-bg" alt="bg-alumni">

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
                    <img src="assets/img/alum-1.jpg" class="testimonial-img" alt="">
                    <h3>Ayanokouji</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Kamu mungkin menyesal mencoba memanipulasiku." – Ayanokouji Kiyotaka.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum-2.jpg" class="testimonial-img" alt="">
                    <h3>Andi Wijaya</h3>
                    <h4>Alumni Teknologi Informasi</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Ilmu yang saya peroleh dari akademi ini benar-benar menjadi fondasi kokoh dalam karier saya sebagai pengembang web. Pengajarannya tidak hanya fokus pada teknis, tetapi juga membentuk pola pikir kritis yang sangat saya rasakan manfaatnya dalam dunia kerja.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum-3.jpg" class="testimonial-img" alt="">
                    <h3>Siti Rahma</h3>
                    <h4>Alumni Kewirausahaan</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Pendidikan dari instansi ini memberikan saya keberanian untuk memulai bisnis sendiri. Materi yang disampaikan relevan dan aplikatif, memberikan bekal yang luar biasa dalam mengelola usaha saya hingga berkembang seperti saat ini.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->
                
                <div class="swiper-slide">
                    <div class="testimonial-item">
                    <img src="assets/img/alum-4.jpg" class="testimonial-img" alt="">
                    <h3>Rizky Pratama</h3>
                    <h4>Alumni Ilmu Komputer</h4>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Menjadi bagian dari instansi ini adalah keputusan terbaik yang pernah saya buat. Kurikulumnya dirancang dengan sangat baik, dan dukungan para dosen tidak ternilai harganya. Semua ini telah membimbing saya untuk menjadi profesional di bidang teknologi.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    </div>
                </div><!-- End testimonial item -->              

                <div class="swiper-slide">
                <div class="testimonial-item">
                    <img src="assets/img/alum-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
            </div>

        </div>

        </section><!-- /Testimonials Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Pricing</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="pricing-item">

                <div class="pricing-header">
                    <h3>Free Plan</h3>
                    <h4><sup>$</sup>0<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="pricing-item featured">

                <div class="pricing-header">
                    <h3>Business Plan</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="pricing-item">

                <div class="pricing-header">
                    <h3>Developer Plan</h3>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                </div>

                <ul>
                    <li><i class="bi bi-dot"></i> <span>Quam adipiscing vitae proin</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nec feugiat nisl pretium</span></li>
                    <li><i class="bi bi-dot"></i> <span>Nulla at volutpat diam uteera</span></li>
                    <li><i class="bi bi-dot"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li><i class="bi bi-dot"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>

                <div class="text-center mt-auto">
                    <a href="#" class="buy-btn">Buy Now</a>
                </div>

                </div>
            </div><!-- End Pricing Item -->

            </div>

        </div>

        </section><!-- /Pricing Section -->
    <!-- Faq Section -->
    <section id="faq" class="faq section">

    <div class="container-fluid">
  
      <div class="row gy-4">
  
        <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
  
          <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
            <h3><span>Pertanyaan yang </span><strong>Sering Diajukan</strong></h3>
            <p>
              Di bawah ini adalah kumpulan pertanyaan yang sering diajukan oleh calon mahasiswa, orang tua, maupun masyarakat umum terkait instansi kami. Kami harap jawaban ini dapat memberikan kejelasan tentang layanan dan fasilitas yang kami tawarkan.
            </p>
          </div>
  
          <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
  
            <div class="faq-item faq-active">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Bagaimana cara mendaftar sebagai mahasiswa baru di akademi ini?</h3>
              <div class="faq-content">
                <p>Pendaftaran mahasiswa baru dapat dilakukan secara online melalui laman resmi kami di <strong>www.joaquin.ac.id</strong>. Anda hanya perlu mengisi formulir pendaftaran, mengunggah dokumen yang diperlukan, dan mengikuti tes seleksi sesuai jadwal yang ditentukan.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Apakah ada beasiswa yang tersedia bagi mahasiswa?</h3>
              <div class="faq-content">
                <p>Ya, kami menyediakan berbagai jenis beasiswa, termasuk beasiswa prestasi, beasiswa kebutuhan finansial, dan beasiswa dari mitra industri. Informasi lebih lengkap tentang syarat dan cara pendaftaran beasiswa dapat ditemukan di bagian <strong>Beasiswa</strong> pada website kami.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Program studi apa saja yang ditawarkan di akademi ini?</h3>
              <div class="faq-content">
                <p>Kami menawarkan program studi unggulan di bidang Teknologi Informasi, Kewirausahaan, Desain Grafis, dan Manajemen Bisnis. Setiap program dirancang untuk memenuhi kebutuhan industri dan memberikan pengalaman belajar yang relevan serta aplikatif.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
            <div class="faq-item">
              <i class="faq-icon bi bi-question-circle"></i>
              <h3>Apakah akademi ini memiliki fasilitas laboratorium?</h3>
              <div class="faq-content">
                <p>Ya, akademi kami dilengkapi dengan laboratorium modern, termasuk laboratorium komputer, laboratorium jaringan, dan studio desain kreatif. Semua fasilitas ini dirancang untuk mendukung proses belajar dan meningkatkan kompetensi mahasiswa.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->
  
          </div>
  
        </div>
  
        <div class="col-lg-5 order-1 order-lg-2">
          <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
        </div>
      </div>
  
    </div>
  
  </section><!-- /Faq Section -->  

    <!-- Team Section -->
<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pengajar Kami</h2>
      <p>Tim pengajar yang berkompeten dan berdedikasi tinggi untuk membimbing para mahasiswa mencapai kesuksesan.</p>
    </div><!-- End Section Title -->
  
    <div class="container" data-aos="fade-up" data-aos-delay="100">
  
      <div class="row gy-5">
  
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/piano.jpg" class="img-fluid" alt="Dr. Piano Agus">
            </div>
            <div class="member-info">
              <h4>Dr. Piano Agus</h4>
              <span>Rektor & Ahli Teknologi Informasi</span>
            </div>
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/hand.jpg" class="img-fluid" alt="Prof. Handless agoes">
            </div>
            <div class="member-info">
              <h4>Prof. Handless Agoes</h4>
              <span>Ketua Program Studi Kewirausahaan</span>
            </div>
          </div>
        </div><!-- End Team Member -->
  
        <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
          <div class="team-member">
            <div class="member-img">
              <img src="assets/img/sad.jpg" class="img-fluid" alt="Dr. Sadness goes">
            </div>
            <div class="member-info">
              <h4>Dr. Sadness goes</h4>
              <span>Pakar Desain Grafis & Multimedia</span>
            </div>
          </div>
        </div><!-- End Team Member -->
  
      </div>
  
    </div>
  
  </section><!-- /Team Section -->
  
<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Artikel Terkini</h2>
      <p>Membahas topik edukatif dan inspiratif dari Akademi Joaquin High School.</p>
    </div><!-- End Section Title -->
  
    <div class="container">
  
      <div class="row gy-4">
  
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <article>
  
            <div class="post-img">
              <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
            </div>
  
            <p class="post-category">Pendidikan</p>
  
            <h2 class="title">
              <a href="blog-details.html">Meningkatkan Potensi Belajar Melalui Teknologi</a>
            </h2>
  
            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Dr. Alex Joaquin</p>
                <p class="post-date">
                  <time datetime="2025-01-10">Jan 10, 2025</time>
                </p>
              </div>
            </div>
  
          </article>
        </div><!-- End post list item -->
  
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <article>
  
            <div class="post-img">
              <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
            </div>
  
            <p class="post-category">Kewirausahaan</p>
  
            <h2 class="title">
              <a href="blog-details.html">Mengasah Jiwa Wirausaha Sejak Dini</a>
            </h2>
  
            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Prof. Clara Adriana</p>
                <p class="post-date">
                  <time datetime="2025-01-05">Jan 5, 2025</time>
                </p>
              </div>
            </div>
  
          </article>
        </div><!-- End post list item -->
  
        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <article>
  
            <div class="post-img">
              <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
            </div>
  
            <p class="post-category">Desain & Kreativitas</p>
  
            <h2 class="title">
              <a href="blog-details.html">Membangun Portofolio Desain yang Mengesankan</a>
            </h2>
  
            <div class="d-flex align-items-center">
              <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
              <div class="post-meta">
                <p class="post-author">Dr. William Marcellus</p>
                <p class="post-date">
                  <time datetime="2025-01-01">Jan 1, 2025</time>
                </p>
              </div>
            </div>
  
          </article>
        </div><!-- End post list item -->
  
      </div><!-- End recent posts list -->
  
    </div>
  
  </section><!-- /Recent Posts Section -->
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">HeroBiz</span>
            </a>
            <div class="footer-contact pt-3">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>