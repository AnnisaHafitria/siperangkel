<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>SiPeRangLab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->

<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/v4-shims.css"> -->
<link href="<?php echo e(asset('sambuts/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/font-awesome.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/font-awesome.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/style.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/animate.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('sambuts/css/skin-blue.css')); ?>" rel="stylesheet">
<!-- Le fav -->
<link rel="shortcut icon" href="<?php echo e(asset('sambuts/ico/favicon.png')); ?>">
<!--[if lt IE 9]>
<style>
nav,.container,header#top-section,.carousel,.demobutton {display:none;}
</style>
<div id='browserWarning'>
You are using an outdated version of Internet Explorer Please to
<a style="color:red;" href='http://getfirefox.com'>Firefox</a>,
<a style="color:red;" href='http://www.google.de/chrome'>Google Chrome</a>
,
<a style="color:red;" href='http://www.apple.com/safari/'>Safari</a>
or the latest version of
<a style="color:red;" href='http://windows.microsoft.com/en-US/internet-explorer/downloads/ie'>Internet Explorer</a>
for a
<span class='bold'>better</span>
and
<span class='bold'>safer</span>
experience.
</div>
<![endif]-->
</head>
<!-- /head-->
<body data-spy="scroll" data-target=".navbar">
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand">SiPeRangLab</a>
	</div>
	<!-- Collect the nav links, forms, other content toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="scroll active"><a href="#top-section">Home</a></li>
			<li class="scroll"><a href="#Section-1">Fasilitas</a></li>
			<li class="scroll"><a href="#Section-2">Foto</a></li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
</nav>
<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
<div class="jumbotron">
	<div id="carousel_intro" class="carousel slide fadeing">
		<div class="carousel-inner">
			<div class="active item" id="slide_1">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						 <h1>Sistem Peminjaman Barang Laboratorium</h1>
                         <h3>Email : guest@gmail.com <br> Kata Sandi : rahasia</h3>
					</div>
					<br/>
					<a href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fa fa-sign-in"></i> Masuk</a>
				</div>
			</div>
			<div class="item" id="slide_2">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						<h1>Selamat Datang <br>Di<br>Halaman Website SIPERANGLAB</h1>
						<br>
						<a href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fa fa-sign-in"></i> Masuk</a>
					</div>
				</div>
			</div>
			<div class="item" id="slide_3">
				<div class="carousel-content">					
					<div class="animated fadeInDownBig">
						<h1>SiPeRangLab Adalah Aplikasi Berbasis Website Yang Di Gunakan Untuk Pengelolaan Sistem Peminjaman Laboratorium Khususnya Pada Laboratorium Komputer.</h1>					
						<br>
						<a href="<?php echo e(url('/login')); ?>" class="buttoncolor animated fadeInRightBig"><i class="fa fa-sign-in"></i> Masuk</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
	<button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
</div>
<div class="inner-top-bg">
</div>
</header>
  <!-- / HOMEPAGE -->
  <!--  SECTION-1 -->
<section id="Section-1" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h1>Fasilitas</h1>
		<p class="lead">
			 	Beberapa Informasi Tentang Sekolah.
		</p>
	</div>
</div>
<div class="row color-white">
	<div class="col-md-12 animated fadeInUpNow">
		<div class="boxservice">
			<i class="fa fa-code"></i>
			<h3>Rekayasa Perangkat Lunak</h3>
			<p>
				RPL adalah pengubahan perangkat lunak guna mengembangkan prinsip yang mudah untuk hasil lebih efisien.
			</p>
		</div>
		<div class="boxservice">
			<i class="fa fa-car"></i>
			<h3>Teknik Kendaraan Ringan</h3>
			<p>
				TKR adalah ilmu yang mempelajari tentang alat-alat transportasi darat yang menggunakan mesin, terutama mobil.
			</p>
		</div>
		<div class="boxservice rightb">
			<i class="fa fa-motorcycle"></i>
			<h3>Teknik Sepeda Motor</h3>
			<p>
				TSM adalah kompetensi keahlian pada bidang studi keahlian otomotif yang menekankan pada jasa mekanik sepeda motor roda dua.
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-tree"></i>
			<h3>Green School</h3>
			<p>
				Sekolah Hijau ialah Eskul yang menunjang penghijauan sekolah, kebersihan, dan penanaman tanaman di area sekolah.
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-gear"></i>
			<h3>Mechanical Club</h3>
			<p>
				Assalaam Mechanical Club adalah ekstrakulikuler dibidang studi keahlian otomotif kendaraan roda dua atau roda empat.
			</p>
		</div>
		<div class="boxservice rightb bottomb">
			<i class="fa fa-camera" ></i>
			<h3>Jurnalistik</h3>
			<p>
				Ekstrakulikuler jurnal menjurus pada bidang informasi yang mempelajari bagaimana mengumpulkan dan menyebarluaskan berita.
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-magic"></i>
			<h3>Creativity</h3>
			<p>
				Assalaam Creativity adalah eskul yang membuat sesuatu hal yang unik dari bahan bekas atau bahan yang sudah tidak terpakai.
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-medkit"></i>
			<h3>Palang Merah Remaja</h3>
			<p>
				PMR adalah eskul yang menunjang pada kesehatan warga sekolah khususnya para pelajar sekolah.
			</p>
		</div>
		<div class="boxservice rightb bottomb">
			<i class="fa fa-soccer-ball-o"></i>
			<h3>Sepak Bola</h3>
			<p>
				Sepak Bola adalah olahraga bola untuk memasukan ke dalam gawang yang dimainkan oleh dua tim di dalamnya ada 11 orang.
			</p>
		</div>
	</div>
</div>
<br>
	<a href="#top-section"><font color="white"><center>Ingin Tahu Informasi Selengkapnya? Masuk Sebagai Guest!.</center></a>
  <!-- end row -->
</div>
</section>
  <!-- SECTION-2(gallery) -->
<section id="Section-2" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container demo-3">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Foto</h1>
		<p class="lead">
			Sebagian Dokumentasi Kegiatan Sekolah.
		</p>
	</div>
</div>
<div class="row animated fadeInUpNow">
	<div class="col-sm-12 col-lg-12">
		<ul class="grid cs-style-4">
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/rpl.png')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>RPL</h3>
			<span>Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tkr.png')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TKR</h3>
			<span>Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tsm.png')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TSM</h3>
			<span>Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/rpl2.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>RPL 2018</h3>
			<span>Smk Assalaam Bandung</span>	
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/rpl1.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>UJIKOM RPL</h3>
			<span>Uji Kompetensi Keahlian Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/rpl3.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>RPL 2018</h3>
			<span>Smk Assalaam Bandung</span>			
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tkr2.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TKR 2018</h3>
			<span>Smk Assalaam Bandung</span>			
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tkr1.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>UJIKOM TKR</h3>
			<span>Uji Kompetensi Keahlian Smk Assalaam Bandung</span>	
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tkr3.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TKR 2018</h3>
			<span>Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tsm2.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TSM 2018</h3>
			<span>Smk Assalaam Bandung</span>			
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tsm1.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>UJIKOM TSM</h3>
			<span>Uji Kompetensi Keahlian Smk Assalaam Bandung</span>	
			</figcaption>
			</figure>
			</li>
			<li>
			<figure>
			<div>
				<img src="<?php echo e(asset('sambuts/img/tsm3.jpg')); ?>" alt="premium-themes-templates">
			</div>
			<figcaption>
			<h3>TSM 2018</h3>
			<span>Smk Assalaam Bandung</span>
			</figcaption>
			</figure>
			</li>
		</ul>
	</div>
	<br><a href="#top-section"><center>Ingin Tahu Barang Yang Bisa Di Pinjam? Masuk Sebagai Guest!.</center></a>
</div>
</div>
</section>
  <!-- SECTION-3(reviews) -->
<!-- <section id="Section-3" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Reviews</h1>
		<p class="lead">
			 What customers say about our Product
		</p>
	</div>
</div>
<div class="row testimonials animated fadeInUpNow">
	<div class="col-sm-12 col-lg-12">
		<div class="arrow">
		</div>
		<div class="testimonials-slider">
			<div class="slide">
				<div class="testimonials-carousel-thumbnail">
					<img width="120" alt="" src="<?php echo e(asset('sambuts/img/avatar.jpg')); ?>">
				</div>
				<div class="testimonials-carousel-context">
					<div class="testimonials-name">
						 Bill Robinson <span>google.com</span>
					</div>
					<div class="testimonials-carousel-content">
						<p>
							 "Our party was a great success and the marquee was perfect for the occasion and so fortunately was the weather! Thank you to you and your team for erecting it so smoothly and professionally.
						</p>
						<p>
							 Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo.Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo."
						</p>
					</div>
				</div>
			</div>
			<div class="slide">
				<div class="testimonials-carousel-thumbnail">
					<img width="120" alt="" src="<?php echo e(asset('sambuts/img/avatar.jpg')); ?>">
				</div>
				<div class="testimonials-carousel-context">
					<div class="testimonials-name">
						 Michael Rocks <span>yahoo.com</span>
					</div>
					<div class="testimonials-carousel-content">
						<p>
							 "Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo.
						</p>
					</div>
					<p>
						 Our party was a great success and the marquee was perfect for the occasion and so fortunately was the weather! Thank you to you and your team for erecting it so smoothly and professionally."
					</p>
				</div>
			</div>
			<div class="slide">
				<div class="testimonials-carousel-thumbnail">
					<img width="120" alt="" src="<?php echo e(asset('sambuts/img/avatar.jpg')); ?>">
				</div>
				<div class="testimonials-carousel-context">
					<div class="testimonials-name">
						 Andrew Bilson <span>wowthemes.net</span>
					</div>
					<div class="testimonials-carousel-content">
						<p>
							 "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
						</p>
					</div>
					<p>
						 Our party was a great success and the marquee was perfect for the occasion and so fortunately was the weather! Thank you to you and your team for erecting it so smoothly and professionally."
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
 -->
 <!-- SECTION-4(team) -->
<!-- <section id="Section-4" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container demo-3">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Our Team</h1>
		<p class="lead">
			 People behind this product
		</p>
	</div>
</div>
<div class="row animated fadeInUpNow">
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="http://www.wowthemes.net/demo/calypso/img/demo/team1.jpg')}}" alt="">
			<div class="caption">
				<h4>Ralph P. Peters</h4>
				<span class="primarycol">- Manager at Company -</span>
				<p>
					 Praesent id metus ante, ut condimentum magna. Nam bibendum, felis eget.<br>
				</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="http://www.wowthemes.net/demo/calypso/img/demo/team2.jpg')}}" alt="">
			<div class="caption">
				<h4>Emma M. Coffey</h4>
				<span class="primarycol">- Lawyer at Construct Inc -</span>
				<p>
					 Praesent id metus ante, ut condimentum magna. Nam bibendum, felis eget.<br>
				</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail">
			<img src="http://www.wowthemes.net/demo/calypso/img/demo/team3.jpg')}}" alt="">
			<div class="caption">
				<h4>Eugene B. Bedwell</h4>
				<span class="primarycol">- Owner of Biscaya -</span>
				<p>
					 Praesent id metus ante, ut condimentum magna. Nam bibendum, felis eget.<br>
				</p>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
  </section> -->
<!-- SECTION-5 (pricing) -->
<!-- <section id="Section-5" class="fullbg color-white">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Pricing</h1>
		<p class="lead">
			 Boxes for any type of pricing plan
		</p>
	</div>
</div>
<div class="row pricing animated fadeInUpNow">
	<div class="col-lg-3">
		<div class="whitebox salmonborder">
			<div class="content">
				<p class="price">
					 299<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-shopping-cart"></i> Buy Now</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox goldborder">
			<div class="content best-offer">
				<p class="price">
					 479<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-user"></i> Sign Up</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox blueborder">
			<div class="content">
				<p class="price">
					 621<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-book"></i> Book Now</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="whitebox greenborder">
			<div class="content">
				<p class="price">
					 843<sup>$</sup>
				</p>
				<ul>
					<li>Shopping Area</li>
					<li>Spacious Rooms </li>
					<li>Close to the Airport</li>
					<li>Heart of the City</li>
				</ul>
				<a class="btn btn-lg"><i class="fa fa-mail-forward"></i> Add to Cart</a>
			</div>
		</div>
	</div>
</div>
</div>
</section> -->
  <!-- SECTION-6 (contact) -->
<!-- <section id="Section-6" class="fullbg">
<div class="section-divider">
</div>
<div class="container">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
		<h2>Contact Us</h2>
		<p class="lead">
			 Fill out the form and we will call you back
		</p>
	</div>
</div>
  <div class="row animated fadeInUpNow">
	<div class="col-lg-8 col-md-offset-2">
		<form action="#" name="MYFORM" id="MYFORM">
			<input name="name" size="30" type="text" id="name" class="col-lg-6 leftradius" placeholder="Your Name">
			<input name="email" size="30" type="text" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
			<br/><br/>
			<textarea id="message" name="message" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea><br/>
			<img src="contact/refresh.jpg')}}" alt="" id="refresh" style="width:45px;"/><img src="contact/get_captcha.php" alt="" id="captcha" style="height:45px;"/>
			<br/>
			<input name="code" type="text" id="code" placeholder="Enter Captcha" class="top20">
			<br/>
			<input value="Send Message" type="submit" id="Send" class="btn btn-default btn-lg">
			<br/>
		</form>
	</div>
</div>
</div>
</section> -->
<!-- FOOTER -->

<footer id="foot-sec">
<div class="footerdivide">
</div>
<div class="container ">
<div class="row">
	<div class="text-center color-white col-sm-12 col-lg-12">
		<ul class="social-icons">
			<li><a href="https://smkassalaambandung.sch.id/"><i class="fa fa-globe"></i></a></li>
			<li><a href="https://www.instagram.com/smkassalaam/"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://web.facebook.com/smkassalaam/"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/smkassalaam?lang=id"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://gmail.com"><i class="fa fa-envelope"></i></a></li>
			<li><a href="https://google.com"><i class="fa fa-google"></i></a></li>
			<li><a href="https://github.com"><i class="fa fa-github"></i></a></li>
		</ul>
		<p>
			<i class="fa fa-copyright"></i> 
			SiPeRangLab. REKAYASA PERANGKAT LUNAK. Annisa Hafitria. SMK ASSALAAM BANDUNG. 2019.
		</p>
		<p>
			Hubungi Kami | 022 5420-220 | Yayasan Assalaam.</a>
		</p>
	</div>
</div>
</div>
</footer>
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo e(asset('sambuts/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.parallax-1.1.3.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.localscroll-1.2.7-min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.scrollTo-1.4.6-min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.bxslider.min.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/jquery.placeholder.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/modernizr.custom.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/toucheffects.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/animations.js')); ?>"></script>
<script src="<?php echo e(asset('sambuts/js/init.js')); ?>"></script>
<!--   <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/v4-shims.js"></script> -->
<!-- <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
 --></body>
</html>