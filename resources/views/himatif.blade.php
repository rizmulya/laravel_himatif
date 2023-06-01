<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portal HIMATIF</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets')}}/img/himatif.png" rel="icon">
  <link href="{{asset('frontend/assets')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets')}}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('frontend/assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('frontend/assets')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('frontend/assets')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('frontend/assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('frontend/assets')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('frontend/assets')}}/img/himatif.png" alt="">
        <span>HIMATIF</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Visi Misi</a></li>
              <li><a href="#">Sejarah</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="{{route('frontpengumuman.index')}}">Pengumuman</a></li>
          <li><a class="nav-link scrollto active" href="{{route('frontberita.index')}}">Berita</a></li>
          <li><a class="nav-link scrollto active" href="#hero">E-Voting</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat Datang</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Portal HIMATIF UCIC</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Selengkapnya</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('frontend/assets')}}/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Tentang HIMATIF</h3>
              <p>
                Himpunan Mahasiswa Teknik Informatika atau HIMATIF merupakan salah satu Organisasi Kemahasiswaan di bawah naungan Universitas Catir Insan Cendekia. 
                HIMATIF memiliki tujuan untuk membantu melancarkan segala kegiatan pendidikan di jurusan dengan ikut memelihara, menumbuhkan, meningkatkan, dan mendayagunakan 
                kemampuan yang ada pada Mahasiswa Jurusan Teknik Informatika.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('frontend/assets')}}/img/1.png" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

     <!-- ======= Features Section ======= -->
    <section id="features" class="features">

    <!-- Feature Icons -->
    <div class="row feature-icons" data-aos="fade-up">
          <h3>Divisi HIMATIF</h3>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{asset('frontend/assets')}}/img/features-3.png" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-line-chart-line"></i>
                  <div>
                    <h4>Science and Education</h4>
                    <p>Mencari event atau mengadakan event tentang Teknik Informatika </p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-stack-line"></i>
                  <div>
                    <h4>Resource and Development</h4>
                    <p>Mengadakan perlombaan atau mencari perlombaan yang bersifat teknologi</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-brush-4-line"></i>
                  <div>
                    <h4>Public Relation</h4>
                    <p>Mengurus sosial media Himatif dan mempromosikan event di sosial media</p>
                  </div>
                </div>


                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-command-line"></i>
                  <div>
                    <h4>Project Management Office</h4>
                    <p>Mengatur jalannya event yang sedang diadakan oleh himatif </p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>PROKER HIMATIF</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{asset('frontend/assets')}}/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>SPIRIT</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>COMFIE</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>SBANDING</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>TIREX</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Visi Misi</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
              </li>

            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Menjadikan pengurus HIMATIF yang Inventif dan Reintegrasi demi terwujudnya mahasiswa Teknik Informatika yang berkarakter, kolaboratif dan harmonis.
                </p>

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Membangun internal HIMATIF yang profesional dan mengedepankan asas kekeluargaan.
                </h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Meningkatkan kreativitas dan inovasi pengurus.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Memaksimalkan komunikasi yang intensif dengan berbagai elemen.</h4>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Memaksimalkan potensi minat dan bakat dalam wujud kegiatan yang terarah.
                </h4>
                </div>
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade show" id="tab3">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

          <div class="col-lg-6">
            <img src="{{asset('frontend/assets')}}/img/features-2.png" class="img-fluid" alt="">
          </div>

        </div><!-- End Feature Tabs -->

        

      </div>

    </section><!-- End Features Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Pengurus HIMATIF</p>
        </header>

        <div class="entry-img">
            <center><img src="{{asset('frontend/assets')}}/img/pengurus.jpeg" alt="" class="img-fluid" width="900"></center>
        </div>


        <!-- <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets')}}/img/agis.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Agis</h4>
                <span>Ketua Umum HIMATIF</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets')}}/img/billy.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Billy</h4>
                <span>Wakil Ketua Umum HIMATIF</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets')}}/img/najwa.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Najwa</h4>
                <span>Sekretaris</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('frontend/assets')}}/img/diar.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Diar</h4>
                <span>Bendara</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div>
<br>
          <div>
          <center>
            <a href="{{route('frontpengumuman.index')}}" class="text-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </center>
         </div>

        </div>

      </div> -->

    </section><!-- End Team Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Berita HIMATIF</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <img src="{{asset('frontend/assets')}}/img/sertijab.png" class="img-fluid" alt="">
              <h3>Serah Terima Jabatan HIMATIF Periode 2023/2024</h3>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{asset('frontend/assets')}}/img/mubes.png" class="img-fluid" alt="">
              <h3>Musyawarah Besar HIMATIF 2023</h3>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{asset('frontend/assets')}}/img/hicare.png" class="img-fluid" alt="">
              <h3>HIMATIFCARE</h3>
            </div>
          </div>

        </div>
        <br>
        <div>
        <center>
            <a href="{{route('frontberita.index')}}" class="text-primary">Selengkapnya <i class="bi bi-arrow-right"></i></a>
        </center>
</div>
      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    {{-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> --}}

   

    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Layanan HIMATIF</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section --> --}}


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Mahasiswa Berprestasi</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Non Akademis</li>
              <li data-filter=".filter-card">Akademis</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets')}}/img/keyla.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets')}}/img/keyla.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets')}}/img/rise.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets')}}/img/rise.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('frontend/assets')}}/img/web2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{asset('frontend/assets')}}/img/web2.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Testimoni Alumni</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  menjadi salah satu bagian dari mahasisawa teknik informatika UCIC sangat berharga bagi saya. dikampus ini kita disediakan fasilitas baik dengan didukung oleh dosen yang berkompeten dibidangnya eksplorasi pada masa kuliah pun sangat membantu saya dalam mengembangkan ilmu pengetahuan dengan bekal mata kuliah Exchange dan MBKM menjadikan saya semakin matang dalam menghadapi dunia kerja.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('frontend/assets')}}/img/testimonials/farhan.png" class="testimonial-img" alt="">
                  <h3>Farhan Nurshidik, S.Kom.</h3>
                  <h4>Alumni Teknik Informatika UCIC 2022</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 menjadi mahasiswa prodi teknik informatika Univertisak Catur Insan Cendekia merupakan pengalaman yang paling berharga bagi saya karena disini saya mendapatkan ilmu yang bermanfaat dan juga fasilitas yang mendukung untuk belajar tentang IT. dengan dosen yang kompeten yang selalu memberikan arahan yang baik dan mendidik dapat membantu proses belajar menjadi mudah dan tersturktur
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('frontend/assets')}}/img/testimonials/syahrul.png" class="testimonial-img" alt="">
                  <h3>Muhammad Syahrul Rahman, S.Kom.</h3>
                  <h4>Alumni Teknik Informatik UCIC 2022</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 menjadi salah satu Mahasiswa Teknik Informatika Universitas Catur Insan Cendekia merupakan pengalaman pembelajaran yang sangat berkesan bagi saya selama menempuh jenjang pendidikan karena disinilah proses pengenalan lebih mendalam ke dunia yang saya impikan yaitu dunia tekhnologi informasi khususnya dibidang IT programmer. selain itudi UCIC memudahkan saya untuk bisa mengikuti program progeam yang diselenggarakan oleh kemndikbud seperti MBKM dan program lainnya Terima kasih UCIC dan teknik Informatika karena sudah menjadi bagian sejarah dalam hidup
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('frontend/assets')}}/img/testimonials/irfan.png" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('frontend/assets')}}/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('frontend/assets')}}/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section --> --}}

    

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Mitra Kolaborasi</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('frontend/assets')}}/img/UCIC.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend/assets')}}/img/UCIC.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    {{-- <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Berita Populer</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{asset('frontend/assets')}}/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{asset('frontend/assets')}}/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{asset('frontend/assets')}}/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Ruang Aspirasi</p>
          <br>
          <h2>Kepuasan Anda sebagai keluarga teknik informatika adalah prioritas utama kami. <br>
            Ekspresikan suara dan aspirasi Anda, bantu kami berbuat lebih baik .</h2>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Kesambi No.202, Drajat, Kec. Kesambi, Kota Cirebon, Jawa Barat 45133</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Kontak</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>himatif@cic.ac.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Kerja</h3>
                  <p>Senin - Sabtu<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <form action="{{ route('aspirasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" class="form-control" name="nama_penyalur" placeholder="Nama" required>
                </div>
                <div>
                <input type="text" class="form-control" name="nim" placeholder="NIM" required>
              </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="aspirasi" rows="6" placeholder="Aspirasi" required></textarea>
                </div>
                <button class="btn btn-primary">Kirim Aspirasi</button>

                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">



    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{asset('frontend/assets')}}/img/himatif.png" alt="">
              <span>HIMATIF</span>
            </a>
            <p>Himpunan Mahasiswa Teknik Informatika UCIC</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontpengumuman.index')}}">Pengumuman</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="{{route('frontberita.index')}}">Berita</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">E-Voting</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jalan Kesambi No.202, Drajat, Kec. Kesambi
              Kota Cirebon, Jawa Barat 45133 <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> himatif@cic.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/aos/aos.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend/assets')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets')}}/js/main.js"></script>

</body>

</html>
