<!DOCTYPE html>

<html lang="en" class="no-js">
    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>HIMATIF UNIB</title>		

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">
		

		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/profile/css/bootstrap.min.css'?>">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/media-queries.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/edit.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url(); ?>assets/profile/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
		<!-- preloader
		<div id="preloader">
			<img src="<?php echo base_url(); ?>assets/profile/img/preloader.gif" alt="Preloader">
		</div>
		end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->



        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container ">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" >
						<h1 id="logo">
							<img src="<?php echo base_url(); ?>assets/profile/img/logo.png" >
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">Tentang</a></li>
                        <li><a href="#team">Struktur</a></li>
                        <li><a href="#works">Bidang</a></li>
                        <li><a href="<?php echo site_url() ?>blog" target="_blank" class="external">Blog</a></li>
                        <li><a href="<?php echo site_url() ?>Login" target="_blank" class="external">Login</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active pagehome" style="">
						<div class="carousel-caption">
							<img src="<?php echo base_url(); ?>assets/profile/img/himatif.png">
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">HIMATIF UNIB</h3>
							<p data-wow-duration="1000ms" class="wow slideInRight animated">HIMPUNAN MAHASISWA TEKNIK INFORMATIKA</p>
							
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>				
				</div>				
			</div>
		</section>
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<?php foreach($tentang as $list){ ?>
						<h2><?php echo $list['judul'] ?></h2>
						<div class="devider"><i class="fa fa-clock-o fa-2x"></i></div>
					</div>
					<div class="col-md-12 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms" id="kolomtentang">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-bullhorn fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<?php echo $list['isi'] ?>
								<?php  }?>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</section>

		<?php $this->load->view('template/struktur-hima') ?>

		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
					<div class="sec-title text-center">
						<h2>Bidang Organisasi</h2>

						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<div class="work-filter">
						<a href="#modalIt" onclick="launch_modal('modalIt');"><img class="col-md-4" data-toggle="modal"  src="<?php echo base_url(); ?>assets/img/it.png"></a>
						<a href="#modalDanus" onclick="launch_modal('modalDanus');"><img class="col-md-4" data-toggle="modal" src="<?php echo base_url(); ?>assets/img/kwu.png"></a>
						<a href="#modalKerohanian" onclick="launch_modal('modalKerohanian');"><img class="col-md-4" data-toggle="modal" src="<?php echo base_url(); ?>assets/img/kerohanian.png"></a>
						<a href="#modalPm" onclick="launch_modal('modalPm');"><img class="col-md-4" data-toggle="modal" src="<?php echo base_url(); ?>assets/img/pm.png"></a>
						<a href="#modalMinatbakat" onclick="launch_modal('modalMinatbakat');"><img class="col-md-4" data-toggle="modal" src="<?php echo base_url(); ?>assets/img/minatbakat.png"></a>
						<a href="#modalPendidikan" onclick="launch_modal('modalPendidikan');"><img class="col-md-4" data-toggle="modal" src="<?php echo base_url(); ?>assets/img/psdm.png"></a>
					</div>		
				</div>
			</div>
		</section>
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
							<img src="<?php echo base_url(); ?>assets/profile/img/footer-logo.png" alt="">
							<p>Himpunan Mahasiswa Teknik Informatika (HIMATIF) di bentuk di Bengkulu (Universitas Bengkulu) pada tanggal 22 september 2006 Himatif merupakan tempat bagi mahasiswa Teknik Informatika Universitas Bengkulu untuk berkarya serta mengabdi sebagai kewajiban seorang mahasiswa.</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Address</h6>
							<p>Sekretariat Himpunan Mahasiswa Teknik Informatika</br>
							Gedung Lab. Teknik Universitas Bengkulu</br>
							Jl. W.R Supratman, Kandang Limun</br>
							Bengkulu 39124, 
							INDONESIA</p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Our Media</h6>
							<ul>
								<li><a href="https://www.facebook.com/Himatif-UNIB-808916865866188/?ref=bookmarks" target="_blank">Facebook</a></li>
								<li><a href="https://www.instagram.com/himatifunib/" target="_blank">Instagram</a></li>
								<li><a href="https://www.youtube.com/channel/UC3qn66dHS-8-VCJ5FpBMoVw" target="_blank">Youtube</a></li>
								<li><a href="himatif.unib@gmail.com" target="_blank">Email</a></li>
							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
						<div class="footer-single">
							<h6 class="title-side">Parent Organitation</h6>
							<div class="imgparent">
								<a target="_blank" href="https://www.facebook.com/bemftunib/" ><img class="col-md-6 col-md-offset-" data-placement="right" data-toggle="tooltip" data-original-title="BEM Fakultas Teknik Universitas Bengkulu" src="<?php echo base_url(); ?>assets/img/bem.png"></a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2020 <a href="#">HIMATIF-UNIB</a>. All rights reserved. Designed & developed by <a href="#">Team WEREWOLF + DR</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

		<!--======================================================-->

		<?php $this->load->view('template/modal-bidang') ?>

		<!---------------------------------------------------------->
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/profile/js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		
		<!-- Google Map -->
        
		<!-- jquery easing -->
        <script src="<?php echo base_url(); ?>assets/profile/js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="<?php echo base_url(); ?>assets/profile/js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="<?php echo base_url(); ?>assets/profile/js/custom.js"></script>
		

		<script>
		  function launch_modal(id) {
		     // Hide all modals using class if required.
		     $('.modal').modal('hide');
		     $('#'+id).modal('show');
		  }

		  	$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			})
		</script>
    </body>
</html>
