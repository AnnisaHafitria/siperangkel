<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SiPeRangKel | Dashboard Guest</title>
    <link href="<?php echo e(asset('guests/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('guests/css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('guests/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('guests/css/lightbox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('guests/css/main.css')); ?>" rel="stylesheet">
    <link id="css-preset" href="<?php echo e(asset('guests/css/presets/preset1.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('guests/css/responsive.css')); ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="<?php echo e(asset('guests/images/assalaam.png')); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  </head>
  <!--/head-->
  <body>
    <!--.preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
    <!--/.preloader-->
    <header id="home">
      <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active" style="background-image: url(guests/images/mobil3.png)">
            <div class="caption">
              <h1 class="animated fadeInLeftBig"><span>SiPeRangKel</span></h1>
              <p class="animated fadeInRightBig">Sistem Peminjaman Barang Bengkel</p>
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fas fa-sign-in-alt"></i> Masuk</a>
            </div>
          </div>
          <div class="item" style="background-image: url(guests/images/mekanik4.png)">
            <div class="caption">
              <h1 class="animated fadeInLeftBig"><span>Selamat Datang<span></h1>
              <p class="animated fadeInRightBig">Hai Pengunjung, Anda berada Di Halaman SiPeRangKel</p>
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fas fa-sign-in-alt"></i> Masuk</a>
            </div>
          </div>
          <div class="item" style="background-image: url(guests/images/tkn.jpg)">
            <div class="caption">
              <h1 class="animated fadeInLeftBig"> Apa Itu <span>SiPeRangKel?</span></h1>
              <p class="animated fadeInRightBig">SiPeRangKel Adalah Aplikasi Berbasis Website Yang Di Gunakan Untuk Pengelolaan Sistem Peminjaman Barang Bengkel <br> Khususnya Pada Bengkel Otomotif Mobil. </p>
              <a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fas fa-sign-in-alt"></i> Masuk</a>
            </div>
          </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
      </div>
      <!--/#home-slider-->
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
              <h1><font color="white">SiPeRangKel</font></h1>
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="scroll active"><a href="#home">Beranda</a></li>
              <li class="scroll"><a href="#services">Materi</a></li>
              <li class="scroll"><a href="#about-us">Jurusan</a></li>
              <li class="scroll"><a href="#portfolio">Barang</a></li>
              <li class="scroll"><a href="#team">Kontak</a></li>
              <li class="scroll"><a href="#contact">Aturan</a></li>
              <li class="scroll"><a href="#blog">Industri</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/#main-nav-->
    </header>
    <!--/#home-->
    <section id="services">
      <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="row">
            <div class="text-center col-sm-8 col-sm-offset-2">
              <h2>Materi Jurusan</h2>
              <p><font color="black">Beberapa materi pembelajaran produktif jurusan TKR yang wajib dipelajari oleh semua siswa - siswi pada jurusan itu dan harus menguasainya untuk memenuhi target ketercapaian materi. </p>
            </div>
          </div>
        </div>
        <div class="text-center our-services">
          <div class="row">
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="350ms">
              <div class="service-icon">
                <i class="fa fa-ruler"></i>
              </div>
              <div class="service-info">
                <h3>Alat Ukur</h3>
                <p>Alat Ukur adalah alat yang di gunakan untuk membantu pengukuran dalam hal besaran, panjang, luas, volume dan sebagainya.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="350ms">
              <div class="service-icon">
                <i class="fa fa-wrench"></i>
              </div>
              <div class="service-info">
                <h3>Hand Tools</h3>
                <p>Hand Tool adalah alat tangan yang digunakan dengan tenaga manusia untuk mengoperasikannya, tidak perlu tenaga besar, biasanya di gunakan oleh mekanik.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="350ms">
              <div class="service-icon">
                <i class="fa fa-snowflake"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Pendingin</h3>
                <p>Sistem Pendinginan dalam mesin kendaraan adalah suatu sistem yang berfungsi untuk menjaga supaya temperatur mesin dalam kondisi ideal.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="350ms">
              <div class="service-icon">
                <i class="fas fa-gas-pump"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Bahan Bakar</h3>
                <p>Sistem Bahan Bakar adalah sistem untuk menyimpan bahan bakar secara aman, menyalurkannya ke mesin, mengkabutkan bahan bakar agar bercampur ke udara.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-car-side"></i>
              </div>
              <div class="service-info">
                <h3>Mesin</h3>
                <p> Mesin / Motor / Engine semuanya adalah suatu alat yang mengubah energi tenaga panas, energi tenaga listrik, dan energi tenaga air untuk menjadi energi tenaga kinetik.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-fire"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Pengapian</h3>
                <p>Sistem Pengapian adalah rangkaian mekatronika untuk menyalurkan energi listrik tenaga tinggi, input tenaga rendah ke busi dan dikonversi menjadi percikan api.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-car-battery"></i>
              </div>
              <div class="service-info">
                <h3>Baterai </h3>
                <p>Baterai / Aki / Accu adalah sebuah sel listrik di dalamnya berlangsung proses elektrokimia yang reversibel (dapat berkebalikan) dengan efisiensinya yang tinggi.</p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="service-icon">
                <i class="fa fa-charging-station"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Pengisian </h3>
                <p>Sistem Pengisian adalah skema penghasil energi listrik yang disalurkan ke semua sistem kelistrikan untuk sumber arus untuk pengisian terhadap daya baterai.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-truck"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Kopling</h3>
                <p>Kopling Kendaraan adalah suatu mekanisme penghubung, pemutus tenaga dari mesin ke transmisi melalui kerja pedal selama perakitan roda gigi.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-car"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Transmisi </h3>
                <p>Sistem Transmisi adalah konversi torsi, kecepatan dari mesin menjadi torsi dan kecepatan yang berbeda dan diteruskan ke penggerak akhir.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="service-info">
                <h3>Final Gear</h3>
                <p>Final Gear adalah bagian penggerak mobil yang menyalurkan putaran dari mesin antara Driveshaft (Kopel) dengan putaran Driveaxle (Asroda).
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="service-icon">
                <i class="fa fa-circle-o-notch"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Kemudi</h3>
                <p>Sistem kemudi adalah sistem chassis, merubah arah, laju kendaraan dengan membelokkan roda depan mobil dan menjaga agar posisi mobil tetap stabil.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-glass-whiskey"></i>
              </div>
              <div class="service-info">
                <h3>Sistem Suspensi</h3>
                <p>Suspensi adalah komponen untuk meredam kejutan, getaran yang terjadi, untuk meningkatkan kenyamanan berkendara, pengendalian kendaraan.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-bolt"></i>
              </div>
              <div class="service-info">
                <h3>Kelistrikan Body</h3>
                <p>Sistem Kelistrikan Body adalah instalasi dari berbagai rangkaian listrik untuk seluruh kebutuhan penerangan pada kendaraan.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-truck-pickup"></i>
              </div>
              <div class="service-info">
                <h3>Diesel</h3>
                <p>Sistem Bahan Bakar Diesel adalah bahan bakar cair yang untuk mesin diesel, jenis mesin dengan performa yang handal dengan pemakaian bahan bakar yang irit.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="service-icon">
                <i class="fa fa-oil-can"></i>
              </div>
              <div class="service-info">
                <h3>EFI / Injeksi</h3>
                <p>EFI merupakan singkatan dari Electronic Fuel Injection adalah penyemprotan atau penginjeksian bahan bakar sudah dilakukan atau dikontrol secara elektronik.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
              <div class="service-icon">
                <i class="fa fa-circle"></i>
              </div>
              <div class="service-info">
                <h3>Ban / Roda</h3>
                <p>Roda / Ban  adalah objek berbentuk lingkaran, dengan sumbu, menghasilkan gerakan gesekan kecil dengan cara bergulir.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
              <div class="service-icon">
                <i class="fa fa-spinner"></i>
              </div>
              <div class="service-info">
                <h3>Spooring & Balancing</h3>
                <p>Spooring adalah proses pada mobil untuk meluruskan kedudukan empat roda mobil ke awal, Balancing adalah menyeimbangkan kembali.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
              <div class="service-icon">
                <i class="fa fa-sync"></i>
              </div>
              <div class="service-info">
                <h3>Service Berkala</h3>
                <p>Service Berkala adalah perawatan yang dilakukan berkelanjutan, sudah terjadwal dalam kurun waktu tertentu / setelah melewati beberapa kali service rutin.
                </p>
              </div>
            </div>
            <div class="col-sm-3   wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
              <div class="service-icon">
                <i class="fa fa-motorcycle"></i>
              </div>
              <div class="service-info">
                <h3>Teknik Sepeda Motor</h3>
                <p>TSM adalah kompetensi keahlian yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/#services-->
    <section id="about-us" class="parallax">
      <div class="container">
        <div class="row">
          <?php $__currentLoopData = \App\TentangProgram::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-6">
            <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h2><?php echo e($data->judul); ?></h2>
              <p><?php echo e($data->deskripsi); ?></p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!--/#about-us-->
    <section id="portfolio">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Barang</h2>
            <p>Barang - barang ini adalah fasilitas yang ada di bengkel TKR barang ini juga dapat di pinjam.</p>
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
                      <p>Persediaan <?php echo e($data->persediaan); ?> <?php echo e($data->satuan); ?></p>
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
        </div>
      </div>
      <div id="portfolio-single-wrap">
        <div id="portfolio-single">
        </div>
      </div>
      <!-- /#portfolio-single-wrap -->
    </section>
    <!--/#portfolio-->
    <section id="features" class="parallax">
      <div class="container">
        <div class="row count">
          <?php $__currentLoopData = \App\Testimoni::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm-3 col-xs-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <h1>+</h1>
            <h3 class="timer"><?php echo e($data->jumlah); ?></h3>
            <p><?php echo e($data->judul); ?></p>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </section>
    <!--/#features--><br><br><br><br>
    <section id="team">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2>Kontak</h2>
            <p>Beberapa Guru dan toolman di bengkel TKR yang dapat di hubungi.</p>
          </div>
        </div>
        <div class="team-members">
          <div class="row">
            <?php $__currentLoopData = \App\Kontak::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="member-image">
                  <img class="img-responsive" src="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" alt="">
                </div>
                <div class="member-info">
                  <h3><?php echo e($data->nama_kontak); ?></h3>
                  <h4><?php echo e($data->jabatan); ?></h4>
                  <b>No HP :</b> <?php echo e($data->nope); ?><br>
                  <b>Email :</b> <?php echo e($data->email); ?><br>
                  <b>Facebook :</b> <?php echo e($data->facebook); ?><br>
                  <b>Instagram :</b> <?php echo e($data->instagram); ?><br>
                  <b>Alamat :</b> <?php echo e($data->alamat); ?>

                </div>
                <div class="social-icons">
                  <ul>
                    <li><a class="linkedin" href="https://web.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="dribbble" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
                    <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="member-image">
                  <img class="img-responsive" src="<?php echo e(asset('guests/images/team/rokib.png')); ?>" alt="">
                </div>
                <div class="member-info">
                  <h3>Muhammad Rokib</h3>
                  <h4>Kepala Program TKR / Wakasek Sarana</h4>
                  <b>No HP :</b> 087825888709 <br>
                  <b>Email :</b> ujang@gmail.com<br>
                  <b>Facebook :</b> Muhammad Rokib<br>
                  <b>Instagram :</b> ujang_sarana<br>
                  <b>Alamat :</b> Jln. Baru Raya IV rt 02 rw 03 Desa Cangkuang Wetan
                </div>
                <div class="social-icons">
                  <ul>
                    <li><a class="linkedin" href="https://web.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="dribbble" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
                    <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="700ms">
                <div class="member-image">
                  <img class="img-responsive" src="<?php echo e(asset('guests/images/team/kurniawan.jpg')); ?>" alt="">
                </div>
                <div class="member-info">
                  <h3>Kurniawan</h3>
                  <h4>Guru Produktif TKR</h4>
                  <b>No HP :</b> 085722464628<br>
                  <b>Email :</b> ngabekurtuluy1982@gmail.com<br>
                  <b>Facebook :</b> Awan D Kurniawan <br>
                  <b>Instagram :</b> tisha_awan82<br>
                  <b>Alamat :</b> Kp. Sukaluyu rt 01 rw 12 Desa Cangkuang Wetan
                </div>
                <div class="social-icons">
                  <ul>
                    <li><a class="linkedin" href="https://web.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="dribbble" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
                    <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="900ms">
                <div class="member-image">
                  <img class="img-responsive" src="<?php echo e(asset('guests/images/team/wahyu.png')); ?>" alt="">
                </div>
                <div class="member-info">
                  <h3>Wahyu Dilyana S.T</h3>
                  <h4>Guru Produktif TKR</h4>
                  <b>No HP :</b> 082127403205<br>
                  <b>Email :</b> wahyudilyana@gmail.com / wahyudilyana@smkassalaambandung.sch.id<br>
                  <b>Facebook :</b> Wahyu Dilyana<br>
                  <b>Instagram :</b> -<br>
                  <b>Alamat :</b> Jln. Baru Raya IV rt 05 rw 03 Desa Cangkuang Kulon
                </div>
                <div class="social-icons">
                  <ul>
                    <li><a class="linkedin" href="https://web.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="dribbble" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
                    <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
                <div class="member-image">
                  <img class="img-responsive" src="<?php echo e(asset('guests/images/team/adrian.jpg')); ?>" alt="">
                </div>
                <div class="member-info">
                  <h3>Adrian Mahmud</h3>
                  <h4>Tool Man / Asisten Guru</h4>
                  <b>No HP :</b> 089528348852<br>
                  <b>Email :</b> adrianmah12@gmail.com<br>
                  <b>Facebook :</b> Adrian Sii Tamao Sheriigawa<br>
                  <b>Instagram :</b> adrian_gank_star<br>
                  <b>Alamat :</b> Kp. Patrol rt 03 rw 05 Desa Sukamukti
                </div>
                <div class="social-icons">
                  <ul>
                    <li><a class="linkedin" href="https://web.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="dribbble" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="twitter" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
                    <li><a class="rss" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="facebook" href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>          
      </div>
    </section>
    <!--/#team-->
    <section id="contact">
      <div id="contact-us" class="parallax">
        <div class="container">
          <div class="row">
            <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <h2>Aturan</h2>
              <p>Tata Tertib ini harus di patuhi oleh setiap orang yang berada di bengkel.</p>
            </div>
          </div>
          <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <?php $__currentLoopData = \App\Aturan::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6">
                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2><?php echo e($data->judul); ?></h2>
                  <p><?php echo e($data->aturan); ?></p>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!-- <div class="col-sm-6">
                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2>Tata Tertib Pengguna Bengkel Otomotif</h2>
                  <p> 1. Pengguna bengkel oleh siswa / siswi sesuai dengan jadwal praktikum.<br>
                    2. Setiap siswa / siswi yang mengikuti praktikum / yang berada di dalam bengkel wajib :<br>
                    &nbsp;&nbsp;&nbsp;a. Memakai seragam praktik dengan rapi dan sopan.<br>
                    &nbsp;&nbsp;&nbsp;b. Membawa alat praktik masing - masing yang di infentarisir oleh sekolah.<br>
                    &nbsp;&nbsp;&nbsp;c. Menjaga ketertiban dan kebersihan ruangan bengkel.<br>
                    &nbsp;&nbsp;&nbsp;d. Mengikuti intruksi dan petunjuk guru paktik dalam menggunakan <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alat-alat bengkel.<br>
                    &nbsp;&nbsp;&nbsp;e. Menjaga setiap peralatan dan fasilitas yang ada di dalam bengkel.<br>
                    &nbsp;&nbsp;&nbsp;f. Mempersiapkan segala peralatan dan keperluan praktik.<br>
                    &nbsp;&nbsp;&nbsp;g. Berada di dalam ruangan minimal 5 menit sebelum praktikum dimulai.<br>
                    3. Setiap siswa / siswi yang mengikuti praktikum / berada di bengkel,<br>dilarang :<br>
                    &nbsp;&nbsp;&nbsp;a. Membawa hand phone dan accessories.<br>
                    &nbsp;&nbsp;&nbsp;b. Membawa tas / kantong kedalam ruang praktikum / bengkel.<br>
                    &nbsp;&nbsp;&nbsp;c. Makan dan minum pada saat praktikum.<br>
                    &nbsp;&nbsp;&nbsp;d. Mengotori atau membuat ruangan kotor dan berantakan.<br>
                    &nbsp;&nbsp;&nbsp;e. Mengoperasikan alat yang tidak di intruksikan oleh guru praktik.<br>
                    &nbsp;&nbsp;&nbsp;f. Menggunakan peralatan atau fasilitas yang ada di ruangan tanpa intruksi<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guru praktik atau penanggung jawab ruangan.<br>
                    &nbsp;&nbsp;&nbsp;g. Membawa peralatan atau sesuatu yang tidak berhubungan dengan pelajaran.<br>
                    &nbsp;&nbsp;&nbsp;h. Berkelahi atau membuat keributan di dalam ruangan.<br>
                    4. Pelanggaran atas tata tertib pada point 3 akan dikenakan hukuman berupa :<br>
                    &nbsp;&nbsp;&nbsp;a. Ditegur.
                    &nbsp;&nbsp;&nbsp;b. Dikeluarkan dari bengkel (tidak mengikuti praktikum).<br>
                    &nbsp;&nbsp;&nbsp;c. Dilaporkan pada PKS kesiswaan atau BP / BK.<br>
                    5. Penggunaan Bengkel di luar jam praktikum harus diketahui dan seijin kepala bengkel.<br>
                  </p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2>Tata Tertib Peminjaman Alat Bengkel</h2>
                  <p> 1. Peminjaman alat menggunakan kartu pinjam / kartu identitas siswa dan bertanggung jawab atas alat yang dipinjamnya.<br>
                    2. Yang tidak berkepentingan dilarang memasuki ruang alat (tools room) dan bahan.<br>
                    3. Pengembalian alat harus dalam kondisi bersih, baik, lengkap, sesuai dengan daftar penjaga alat berhak menolak pengembalian.<br>
                    4. Periksa terlebih dahulu alat-alat yang di pinjam.<br>
                    5. Dimana ada kerusakan alat siswa wajib melapor kepada instruktur / guru praktek.<br>
                  </p>
                  <h3>Keterangan :</h3>
                  <p> Setiap peminjam alat yang menghilangkan dan merusak akibat kesalahan prosedur wajib mengganti dengan peralatan yang sama.
                  </p>
                  <h3>Perhatian :</h3>
                  <p> Alat - alat setelah dipakai dikembalikan ketempat semula dengan rapih dan bersih.
                  </p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/#contact-->
    <section id="pricing">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2>Target Ketercapaian Materi</h2>
            <p>Materi Pembelajaran yang harus di ajarkan kepada siswa untuk jurusan TKR SMK ASSALAAM BANDUNG. </p>
          </div>
        </div>
        <div class="pricing-table">
          <div class="row">
            <div class="col-sm-2">
              <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="450ms">
                <h3>Materi TKR</h3>
                <div class="price">
                  X <span>/ Tahun</span>                                 
                </div>
                <ul>
                  <li>1. Sistem Pendinginan</li>
                  <li>2. Sistem Bahan Bakar</li>
                  <li>3. Komp. Mesin 2 Tak dan 4 Tak</li>
                  <li>4. Sistem Pengapian</li>
                  <li>5. Sistem Hidrolik</li>
                  <li>6. Baterai</li>
                  <li>7. Sistem Starter dan Pengisian</li>
                  <li>8. Sistem Rem</li>
                </ul>
                <a class="btn btn-sm btn-primary">ENGINE TUNE UP<br>KARBURATOR</a>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="550ms">
                <h3>Materi TKR</h3>
                <div class="price">
                  XI <span>/ Tahun</span>                          
                </div>
                <ul>
                  <li>1. Sistem Kopling</li>
                  <li>2. Sistem Transmisi</li>
                  <li>3. Final Gear</li>
                  <li>4. Poros Penggerak</li>
                  <li>5. Sistem Kemudi</li>
                  <li>6. Sistem Suspesi</li>
                  <li>7. Kelistrikan Body</li>
                </ul>
                <a class="btn btn-sm btn-primary">TRANSMISI<br>OTOMATIS</a>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="650ms">
                <h3>Materi TKR</h3>
                <div class="price">
                  XII <span>/ Tahun</span>                                
                </div>
                <ul>
                  <li>1. Sistem Bahan Bakar Diesel & EFI</li>
                  <li>2. Roda dan Ban (Spooring Balance)</li>
                  <li>3. Sistem Kelistrikan Accesories</li>
                  <li>4. Sistem A / C</li>
                  <li>5. Service Berkala 40.000 Km EFI</li>
                </ul>
                <a class="btn btn-sm btn-primary">BERKALA 40.000<br>MATERI UJIKOM</a>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="750ms">
                <h3>Materi Mulok</h3>
                <div class="price">
                  X <span>/ Tahun</span>                    
                </div>
                <ul>
                  <li>1. Alat Ukur</li>
                  <li>2. Sistem Pendinginan</li>
                  <li>3. Sistem Bahan Bakar</li>
                  <li>4. Komp. Mesin 2 Tak dan 4 Tak</li>
                  <li>5. Sistem Pengapian</li>
                  <li>6. Sistem Hidrolik</li>
                  <li>7. Baterai</li>
                  <li>8. Sistem Starter dan Pengapian</li>
                  <li>9. Sistem Rem</li>
                </ul>
                <a class="btn btn-sm btn-primary">ENGINE TUNE UP<br>KARBURATOR</a>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="850ms">
                <h3>Materi Mulok</h3>
                <div class="price">
                  XI <span>/ Tahun</span>                    
                </div>
                <ul>
                  <li>1. Perbaikan Engine Berikut Komponen</li>
                  <li>2. Perbaikan Sistem Starter</li>
                  <li>3. Perbaikan Sistem Transmisi Manual</li>
                  <li>4. Perbaikan Sistem Rem</li>
                  <li>5. Perbaikan Sistem Suspensi</li>
                  <li>6. Service Berkala Chassis</li>
                </ul>
                <a class="btn btn-sm btn-primary">TRANSMISI<br>MANUAL</a>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="950ms">
                <h3>Materi Mulok</h3>
                <div class="price">
                  XII <span>/ Tahun</span>                    
                </div>
                <ul>
                  <li>1. Perbaikan Sistem Kelistrikan Body</li>
                  <li>2. Pemantapan UJIKOM</li>
                  <li>3. Perawatan Berkala Karburator</li>
                </ul>
                <a class="btn btn-sm btn-primary">TUNE UP<br>KARBURATOR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/#pricing-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
            <h2>Industri</h2>
            <p>SMK ASSALAAM khususnya pada jurusan Teknik Kendaaan Ringan telah bekerja sama dengan beberapa industri yang sudah terkenal.</p>
          </div>
        </div>
        <div class="blog-posts">
          <div class="row">
            <?php $__currentLoopData = \App\Industri::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
              <div class="post-thumb">
                <img class="img-responsive" src="<?php echo e(asset('assets/img/foto/'.$data->foto)); ?>" style="max-height:200px;max-width:200px;margin-top:10px;" alt=""> 
                <div class="post-icon">
                  <i class="fa fa-picture-o"></i>
                </div>
              </div>
              <div class="entry-header">
                <h3><?php echo e($data->nama_industri); ?></h3>
                <span class="date"><?php echo e($data->kerja_sama); ?></span>
                <span class="cetagory">Di <strong>SiPeRangKel</strong></span>
              </div>
              <div class="entry-content">
                <p><?php echo e($data->deskripsi); ?> </p>
              </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </section>
    <!--/#blog-->
    <footer id="footer">
      <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
          <div class="footer-logo">
          </div>
          <div class="social-icons">
            <ul>
              <li><a class="facebook" href="https://smkassalaambandung.sch.id/"><i class="fa fa-globe"></i></a></li>
              <li><a class="envelope" href="https://www.google.com/maps"><i class="fa fa-map-marker-alt"></i></a></li>
              <li><a class="linkedin" href="https://web.facebook.com/smkassalaam/"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter"href="https://twitter.com/smkassalaam?lang=id"><i class="fab fa-twitter"></i></a></li>
              <li><a class="dribbble" href="https://www.instagram.com/smkassalaam/"><i class="fab fa-instagram"></i></a></li>
              <li><a class="tumblr" href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
              <li><a class="envelope" href="https://google.com"><i class="fab fa-google"></i></a></li>
              <li><a class="facebook" href="https://github.com"><i class="fab fa-github"></i></a></li>
            </ul>
          </div>
          <p>
            <i class="fa fa-copyright"></i> 
            SiPeRangKel. REKAYASA PERANGKAT LUNAK. Annisa Hafitria. SMK ASSALAAM BANDUNG. <script>document.write(new Date().getFullYear());</script>.
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