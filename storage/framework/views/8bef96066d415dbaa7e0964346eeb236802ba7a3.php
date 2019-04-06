<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SiPeRangLab | Dashboard Guest</title>
  <link href="<?php echo e(asset('guests/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('guests/css/animate.min.css')); ?>" rel="stylesheet"> 
  <link href="<?php echo e(asset('guests/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('guests/css/lightbox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('guests/css/main.css')); ?>" rel="stylesheet">
  <link id="css-preset" href="<?php echo e(asset('guests/css/presets/preset1.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('guests/css/responsive.css')); ?>" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="<?php echo e(asset('guests/js/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('guests/js/respond.min.js')); ?>"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="<?php echo e(asset('guests/images/favicon.ico')); ?>">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(guests/images/17.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>SiPeRangLab</span></h1>
            <p class="animated fadeInRightBig">Sistem Peminjaman Barang Laboratorium</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();$('#logout-form').submit();">
              Keluar
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form></a>
          </div>
        </div>
        <div class="item" style="background-image: url(guests/images/18.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>Selamat Datang<span></h1>
            <p class="animated fadeInRightBig">Di SiPeRangLab ( Sistem Peminjaman Barang Laboratorium )</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();$('#logout-form').submit();">
              Keluar
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form></a>
          </div>
        </div>
        <div class="item" style="background-image: url(guests/images/15.jpeg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Hai <span>Pengunjung</span></h1>
            <p class="animated fadeInRightBig">Anda Berada di Halaman Website Sistem Peminjaman Barang Laboratorium  </p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();$('#logout-form').submit();">
              Keluar
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form></a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <h1><font color="white">SiPeRangLab</h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Program</a></li> 
            <li class="scroll"><a href="#about-us">Jurusan</a></li>                     
            <li class="scroll"><a href="#portfolio">Barang</a></li>
            <li class="scroll"><a href="#team">Kontak</a></li> 
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Program Jurusan</h2>
            <p><font color="black">Rekayasa Perangkat Lunak adalah salah satu cabang dari Teknik Informatika, jurusan ini membahas tentang program perangkat lunak yang berada di komputer. </p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-code"></i>
            </div>
            <div class="service-info">
              <h3>Programming</h3>
              <p>Pemrograman adalah proses menulis, menguji dan memperbaiki, dan memelihara kode yang membangun suatu program komputer.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-wrench"></i>
            </div>
            <div class="service-info">
              <h3>Maintenance</h3>
              <p>Pemeliharaan adalah kegiatan yang dilakukan untuk menjaga, memperbaiki barang atau perangkat keras sampai pada kondisi yang bisa diterima.
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="service-info">
              <h3>Desktop</h3>
              <p>Aplikasi Desktop adalah suatu aplikasi yang mampu beroperasi secara offline, tetapi kita harus menginstalnya sendiri pada laptop atau komputer.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-globe"></i>
            </div>
            <div class="service-info">
              <h3>Website</h3>
              <p>Aplikasi Web adalah suatu aplikasi berbasis website yang diakses menggunakan penjelajah web melalui suatu jaringan seperti Internet atau intranet..</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-mobile-phone"></i>
            </div>
            <div class="service-info">
              <h3>Mobile</h3>
              <p>Aplikasi Mobile adalah program komputer yang dirancang untuk berjalan pada peranti bergerak seperti ponsel/tablet atau jam tangan.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-language"></i>
            </div>
            <div class="service-info">
              <h3>Programming Language </h3>
              <p>Bahasa Pemrograman adalah instruksi standar untuk memerintah komputer suatu himpunan aturan sintaks dan semantik yang dipakai untuk program komputer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Tentang Jurusan</h2>
            <p>Rekayasa Perangkat Lunak adalah salah satu jurusan yang bisa di bilang masih baru di sekolah kami dari saat sekolah berdiri jurusan ini mempunyai tenaga pengajar yang cukup ahli dan berkompeten berasal dari perguruan tinggi yang cukup terpercaya dan mempunyai kinerja yang bagus juga pengalaman yang banyak fasilitas jurusan ini ada dua laboratorium komputer untuk pemrograman dan satu laboratorium untuk jaringan.</p>
            <p>Di sekolah kami mempunyai program pembelajaran yang berbeda dengan sekolah lainnya di sekolah kami menggunakan sistem blok dua minggu di kelas dua minggu praktek dan jika memilih satu jurusan pasti ada tambahannya jurusan lain seperti buy one get one, dan jika mengambil Teknik Teknik Informatika jurusan RPL maka mendapatkan keahlian Teknik Komputer Jaringan atau biasa di singkat TKJ maka selain dapat ilmu perangkat lunak (software) juga dapat ilmu perangkat keras (hardware).</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">Pengalaman</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="75">75%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Website</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="30">30%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Mobile</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="10">10%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Maintenance</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="60">60%</div>
                </div>
              </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Enjoy</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="20">20%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Stres</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Barang</h2>
          <p>Barang - barang ini adalah fasilitas yang ada di laboratorium komputer barang ini juga dapat di pinjam.</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
      <?php $__currentLoopData = \App\Barang::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" alt="" style="height: 300px;">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3><?php echo e($data->nama_barang); ?></h3>
                      <p>Persediaan <?php echo e($data->persediaan); ?></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

        <!--  <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/2.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/3.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/4.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/5.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/6.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/7.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="<?php echo e(asset('guests/images/portfolio/8.jpg')); ?>" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Time Hours</h3>
                    <p>Design, Photography</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a class="folio-read-more" href="#" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="<?php echo e(asset('guests/images/portfolio/portfolio-details.jpg')); ?>" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  -->
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <br>
          <h1>+</h1>
          <h3 class="timer">328</h3>
          <p>Lulusan</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="150ms">
          <i class="fa fa-wrench"></i>
          <br>
          <h1>+</h1>
          <h3 class="timer">150</h3>                    
          <p>Bekerja</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms">
          <i class="fa fa-trophy"></i>
          <br>
          <h1>+</h1>
          <h3 class="timer">50</h3>                    
          <p>Prestasi</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="200ms">
          <i class="fa fa-book"></i> 
          <br>
          <h1>+</h1>                   
          <h3>100</h3>
          <p>Kuliah</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Kontak</h2>
          <p>Guru dan toolman di laboratorium komputer yang dapat di hubungi.</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo e(asset('guests/images/team/candra.jpg')); ?>" alt="">
              </div>
              <div class="member-info">
                <h3>Candra Herdiansyah</h3>
                <h4>Web Developer</h4>
                <b>No HP :</b> 089639030534<br>
                <b>Email :</b> candraherdiansyah14@gmail.com<br>
                <b>Facebook :</b> Candra Herdiansyah<br>
                <b>Instagram :</b> kangcandra_<br>
                <b>Alamat :</b> Ciguriang Girang rt 01 / rw 04, Desa Cangkuang Wetan
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="linkedin" href="https://web.facebook.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="dribbble" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                  <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker"></i></a></li>
                  <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                  <li><a class="facebook" href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo e(asset('guests/images/team/mulki.jpg')); ?>" alt="">
              </div>
              <div class="member-info">
                <h3>M Mulki Sukmana</h3>
                <h4>Maintenance</h4>
                <b>No HP :</b> 0895380244678<br>
                <b>Email :</b> mulki.sukmana17@gmail.com<br>
                <b>Facebook :</b> Muhamad Mulki Sukmana<br>
                <b>Instagram :</b> muhamadmulkisukmana<br>
                <b>Alamat :</b> Jln Terusan Cibaduyut, Kp Citamiang Kaler rt 02 / rw 06, Desa Cangkuang kulon
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="linkedin" href="https://web.facebook.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="dribbble" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                  <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker"></i></a></li>
                  <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                  <li><a class="facebook" href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo e(asset('guests/images/team/wildan.jpg')); ?>" alt="">
              </div>
              <div class="member-info">
                <h3>Wildan Abdul Aziz</h3>
                <h4>Android Developer</h4>
                <b>No HP :</b> 08112025742<br>
                <b>Email :</b> wildanabdulaziz88@gmail.com<br>
                <b>Facebook :</b> Wildan Abdul Aziz<br>
                <b>Instagram :</b> wildanabdulaziz<br>
                <b>Alamat :</b> Jln Mutiara I No 40 Blok W, Cinunuk, Cileunyi
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="linkedin" href="https://web.facebook.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="dribbble" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                  <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker"></i></a></li>
                  <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                  <li><a class="facebook" href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="<?php echo e(asset('guests/images/team/ute.png')); ?>" alt="">
              </div>
              <div class="member-info">
                <h3>Ute Juli Kurnia</h3>
                <h4>Kepala Program RPL</h4>
                <b>No HP :</b> 08112443213<br>
                <b>Email :</b> utejulikurnia@gmail.com<br>
                <b>Facebook :</b> Ute Juli<br>
                <b>Instagram :</b> utejulikurnia<br>
                <b>Alamat :</b> Komplek Permata biru blok ax no 42
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="linkedin" href="https://web.facebook.com"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="dribbble" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                  <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker"></i></a></li>
                  <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                  <li><a class="facebook" href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  

  

  

  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
        </div>
        <div class="social-icons">
          <ul>
          <li><a class="facebook" href="https://smkassalaambandung.sch.id/"><i class="fa fa-globe"></i></a></li>
          <li><a class="envelope" href="https://www.google.com/maps"><i class="fa fa-map-marker"></i></a></li>
          <li><a class="linkedin" href="https://web.facebook.com/smkassalaam/"><i class="fa fa-facebook"></i></a></li>
          <li><a class="twitter"href="https://twitter.com/smkassalaam?lang=id"><i class="fa fa-twitter"></i></a></li>
          <li><a class="dribbble" href="https://www.instagram.com/smkassalaam/"><i class="fa fa-instagram"></i></a></li>
          <li><a class="tumblr" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
			    <li><a class="envelope" href="https://google.com"><i class="fa fa-google"></i></a></li>
			    <li><a class="facebook" href="https://github.com"><i class="fa fa-github"></i></a></li>
            <!--<li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>-->
          </ul>
        </div>
        <p>
			    <i class="fa fa-copyright"></i> 
          SiPeRangLab. REKAYASA PERANGKAT LUNAK. Annisa Hafitria. SMK ASSALAAM BANDUNG. 2019.
		    </p>
		    <p>
          Hubungi Kami | 022 5420-220 | Yayasan Assalaam.</a>
		    </p>
      </div>
    </div>
    
  </footer>

  <script type="text/javascript" src="<?php echo e(asset('guests/js/jquery.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/jquery.inview.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/wow.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/mousescroll.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/smoothscroll.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/jquery.countTo.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/lightbox.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('guests/js/main.js')); ?>"></script>

</body>
</html>