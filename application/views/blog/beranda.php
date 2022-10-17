<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-blog-beranda.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style-template.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animations.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/profile/css/animate.css">

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/css3-animate-it.js"></script>
    

    <script type="text/javascript">
    	$(function () {
		var nav = $('.container-fluid');
		
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
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

			<div class="headerPage-section col-md-12">
				<div class="titlePage wow fadeInLeft animated" id="article"><h3 class="">Article & News</h3></div>
			</div>

			<div class="article-section col-md-10 col-md-push-1">
				<div class="row">
					<div class="view-sort-article col-md-8 " style="">
						<div class="row">

								<?php 
									$x= 0;

									for ($i = 0; $i < count($deptlist); ++$i){
									$x++;?>

								<div class="article-child col-md-6 wow fadeInUp">
									<div class="article-view ">
										<div class="img-cover "><img src="<?php echo $deptlist[$i]->image; ?>"></div>
										<div class="article-sort">
											<h4 class=""><a href="<?php echo site_url() ?>blog/viewartikel/<?php echo $deptlist[$i]->slink ?>"><?php echo $deptlist[$i]->judul ?></a></h4>
											<div class="propert">
												<h6 class="date" data-placement="top" data-toggle="tooltip" data-original-title="Date Posting <?php echo $deptlist[$i]->date ?>"><span class="fa fa-calendar"></span><?php echo $deptlist[$i]->date ?></h6>
												<h6 class="date" data-placement="top" data-toggle="tooltip" data-original-title="Posted by <?php echo $deptlist[$i]->writter ?>"><span class="fa fa-user"></span><?php echo $deptlist[$i]->writter ?></h6>
											</div>
											<p><?php echo $deptlist[$i]->artikel ?></p>
										</div>
										<div class="more ">
											<a href="<?php echo site_url()?>blog/viewartikel/<?php echo $deptlist[$i]->slink ?>">Continue Reading</a>
										</div>
									</div>
								</div>
								<?php } ?>
								<?php 
								//if($x==4) break;} ?>
								<div class="top-pagination col-md-12" >
									<?php echo $pagination; ?>
								</div>

						</div>
					</div>

					<div class="sidebar col-md-4">
						<?php $this->load->view('template/sidebar')?>
					</div>
				</div>
			</div>

			<div class="headerPage-section col-md-12">
				<div class="titlePage wow fadeInLeft animated" id="event"><h3>Events</h3></div>
			</div>

			<div class="event-section col-md-10 col-md-push-1" >
				<?php 
				$x= 0;
				foreach ($pamflet as $list){
				$x++;?> 

				<div class="wow fadeInUp" style="display:<?php if($status == 'aktif'){echo "block";}else{ echo "none";} ?>">
					<div class="header-event">
						<h4><?php echo $list['judul']; ?></h4>
					</div>
					<div class="pamflet" >
						<img src="<?php echo $list['image']; ?>">
					</div>
					<div class="footer-event">
						<a href="<?php echo $list['link']; ?>"><h4>Open Event and Read More</h4></a>
					</div>
				</div>

				<?php if($x==1) break;} ?>
				

				<div class="all-event">
					<h5>More Event</h5>
					<div class="event-more">
						<?php 
						$x= 0;

						foreach ($event as $list){
						$x++;?>
						<div class="event-ev wow fadeInLeft">
							<div class="thumb"><img src="<?php echo $list['image']; ?>"></div>
							<div class="deskrip-event-ev">
								<h4 class="title"><a href="<?php echo site_url() ?>blog/viewevent/<?php echo $list['slink'] ?>"><?php echo $list['judul'] ?></a> </h4>
								<h6 class="date" data-placement="top" data-toggle="tooltip" data-original-title="Date Posting <?php echo $list['date'] ?>"><span class="fa fa-calendar"></span><?php echo $list['date'] ?></h6>
								<h6 class="date" data-placement="top" data-toggle="tooltip" data-original-title="Bidang Penyelenggara Acara"><span class="fa fa-institution"></span>Bidang <?php echo $list['bidang'] ?></h6>
								<div class="isi-event-ev"><?php echo $list['artikel'] ?></div>
								<a href="<?php echo site_url() ?>blog/viewevent/<?php echo $list['slink'] ?>" class="readM-event-ev">Read More</a>
							</div>
						</div>
						<?php } ?>
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
		mobile:       false,       // trigger animations on mobile devices (default is true)
		live:         true        // act on asynchronously loaded content (default is true)
	  }
	);
	wow.init();
</script>
<script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top - 70
	    }, 1000, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>

</html>