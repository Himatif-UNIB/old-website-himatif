<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard HIMATIF</title> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-dashboard.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container col-md-12 col-sm-12">
		<div class="row">
			<div class="left-nav col-md-2 col-sm-2">
				<header>
					<h3><a href="<?php echo site_url() ?>blog">HIMATIF</a></h3>
				</header>

				<div class="more-header">
					<img src="<?php echo base_url(); ?>assets/img/himatif.png">
					<p>Himpunan Mahasiswa Teknik Informatika</p>
					<p class="unib">Universitas Bengkulu</p>
				</div>

				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
							<span class="sr-only">toggle responsive</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#" class="navbar-brand">Navigation</a>
					</div>

					<div class="nav-list collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar">
							<li ><a class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>" href="<?php echo site_url(); ?>dashboard"><span class="fa fa-home"></span>Home</a></li>
							<li>
								<a href="#" class="<?php if($this->uri->segment(1)=="artikel"){echo "active";}?>"><span class="fa fa-pencil"></span>Article<span class="show-list fa fa-angle-double-down"></span></a>
								<ul class="">
							    	<li><a href="<?php echo site_url(); ?>artikel/tambah_artikel"><span class="fa fa-circle"></span>New Post</a></li>
							    	<li><a href="<?php echo site_url(); ?>artikel/allpost/all"><span class="fa fa-circle"></span>All Post</a></li>
					   			</ul>
				  			</li>
				  			<li>
								<a href="#" class="<?php if($this->uri->segment(1)== "event" || $this->uri->segment(1)== "pamflet" ){echo "active";}?>"><span class="fa fa-bullhorn"></span>Event<span class="show-list fa fa-angle-double-down"></span></a>
								<ul class="">
							    	<li><a href="<?php echo site_url(); ?>pamflet"><span class="fa fa-circle"></span>Pamflet</a></li>
							    	<li><a href="<?php echo site_url(); ?>event"><span class="fa fa-circle"></span>All Event</a></li>
					   			</ul>
				  			</li>

							<li ><a class="<?php if($this->uri->segment(1)=="tentanghimatif"){echo "active";}?>" href="<?php echo site_url(); ?>tentanghimatif"><span class="fa fa-info-circle"></span>Tentang Himatif</a></li>
				  			<li>
								<a href="<?php echo site_url(); ?>struktur" class="<?php if($this->uri->segment(1)=="struktur"){echo "active";}?>"><span class="fa fa-align-center"></span>Struktur HIMATIF</a>
				  			</li>
				  			<li>
								<a href="#" class="<?php if($this->uri->segment(1)== "bidang" ){echo "active";}?>"><span class="fa fa-institution"></span>Bidang Organisasi<span class="show-list fa fa-angle-double-down"></span></a>
				  				<ul class="">
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/it"><span class="fa fa-circle"></span>Information Technology</a></li>
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/minatbakat"><span class="fa fa-circle"></span>Minat dan Bakat</a></li>
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/pm"><span class="fa fa-circle"></span>Pengabdian Masyarakat</a></li>
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/pendidikan"><span class="fa fa-circle"></span>PSDM</a></li>
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/danus"><span class="fa fa-circle"></span>Kewirausahaan</a></li>
							    	<li><a href="<?php echo site_url(); ?>bidang/subbidang/kerohanian"><span class="fa fa-circle"></span>Kerohanian</a></li>
					   			</ul>
				  			</li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
				<div class="row">
					<div class="top-nav col-md-12 col-sm-12">
						<h3>DASHBOARD</h3>
						<a href="<?php echo site_url(); ?>login/logout"><span class="fa fa-power-off"></span></a>
					</div>
					<div class="main col-md-12">
						<div class="row">
							<?php if($isi){
								$this->load->view($isi);
								}
							?>				
						</div>
					</div>

					<footer class="col-md-12 col-sm-12">
						<p>Copyright © 2019-2020 HIMATIF UNIB. All rights reserved.</p>
					</footer>
				</div>
				
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	/*jQuery time*/
	$(document).ready(function(){
	 $(".nav-list a").click(function(){
	  //slide up all the link lists
	  $(".nav-list ul ul").slideUp();
	  //slide down the link list below the h3 clicked - only if its closed
	  if(!$(this).next().is(":visible"))
	  {
	   $(this).next().slideDown();
	  }
	 })
	})
</script>


</html>