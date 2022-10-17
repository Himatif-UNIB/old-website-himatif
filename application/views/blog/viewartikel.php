<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-blog-artikel.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-template.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/animate.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	$(function () {
		var nav = $('.container-fluid');
		var content = $('.content-wrap');
		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				nav.addClass("shrink");

			} else {
				nav.removeClass("shrink");
			}
		});
	});
    </script>
</head>
<body>
	<div class="wrap col-md-12">
		<div class="row">
			<div class="navbar-section " style="border:px solid black">
				<?php $this->load->view('template/navbar')?>
			</div>

			<div class="header-section col-md-12">
				<div class="row">
					<div class="isi col-md-10 col-md-push-1" style="border:px solid black">
						<h2 class="">Blog</h2>
						<h3>HIMATIF<span class=""></span></h3>
						<p id="typing"></p>
					</div>
				</div>
			</div>

			<div class="artikel-section col-md-10 col-md-push-1">
				<div class="row">
					<div class="kolom-article col-md-8 wow fadeInDown">
						<div class="link-here">
							<ol class="breadcrumb">
							    <li><span>You are here : </span><a href="<?php echo site_url() ?>blog"><?php echo $this->uri->segment(1) ?></a>
							    </li>
							    <li><a href="<?php echo site_url() ?>blog#<?php if($this->uri->segment(2) == "viewartikel"){echo "article";}else{echo "event";} ?>"><?php echo $this->uri->segment(2) ?></a>
							    </li>
							    <li class="active"><?php echo $this->uri->segment(3) ?></li>
							</ol>
						</div>
						<?php 
						$x= 0;

						foreach ($artikel1 as $list){
						$x++;?>
						<img src="<?php echo $list['image']?>">
						<div class="article-art">
							<div class="title"><h3><a href="<?php echo site_url() ?>blog/viewartikel/<?php echo $list['slink'] ?>"><?php echo $list['judul'] ?></a></h3></div>
							<div class="proper">
								<h6 class="date" data-placement="top" data-toggle="tooltip" data-original-title="Date Posting <?php echo $list['date'] ?>"><span class="fa fa-calendar"></span><?php echo $list['date'] ?></h6>
								<h6 class="user" data-placement="top" data-toggle="tooltip" data-original-title="Posted by <?php echo $list['writter'] ?>"><span class="fa fa-user"></span><?php echo $list['writter'] ?></h6>
							</div>
							<span class="sline"></span>
							<div class="isi">
								<p><?php echo $list['artikel'] ?></p>
							</div>
						</div>
						<!--<div class = "komen-artikel">
							<h3>Komentar</h3>
							<form class="form-group" method="post" action="<?php echo base_url('blog/submit_komen')?>">
								<label>Nama:</label>
								<input type="text" name="nama" class="form-control">
								<label>Koment</label>
								<textarea name="komen" class="form-control"></textarea><br>
								<input type="submit" name="submit" class="btn btn-primary" value="Submit">
							</form>
						</div>-->
						<?php 
								if($x==1) break;} ?>
					</div>

					<div class="sidebar col-md-4">
						<?php $this->load->view('template/sidebar')?>
					</div>
				</div>
			</div>

			<div class="footer col-md-12">
				<?php $this->load->view('template/footer')?>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
$('h6').tooltip();
$(document).ready(function() {
    var text = 'Article, news, event, and all activities HIMATIF. . . .      ';

	var chars = text.split('');
	var container = document.getElementById("typing");

	var i = 0;
	setInterval(function () {
	    if (i < chars.length) {
	        container.innerHTML += chars[i++];
	    } else {
	        i = 0;
	        container.innerHTML = "";
	    }
	}, 140);
});
</script>

<script src="<?php echo base_url(); ?>assets/profile/js/wow.min.js"></script>
<script>
	var wow = new WOW ({
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       0,          // distance to the element when triggering the animation (default is 0)
		mobile:       true,       // trigger animations on mobile devices (default is true)
		live:         true        // act on asynchronously loaded content (default is true)
	  }
	);
	wow.init();
</script>

