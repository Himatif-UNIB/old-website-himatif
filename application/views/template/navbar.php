<nav class="navbar navbar-default navbar-fixed-top ">
	<div class="container-fluid col-md-10 col-md-offset-1">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbarCollapse1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		    <a class="" href="<?php echo site_url() ?>blog"></a>
		    <a class="navbar-brand" >
				<img src="<?php echo base_url(); ?>assets/profile/img/logo.png" style="border: px solid black; margin-top: -5px;">
			</a>
		</div>

		<div class="subMenu collapse navbar-collapse" id="navbarCollapse1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>" target="_blank">Profile</a></li>
				<li><a href="<?php $x=$this->uri->segment(2); if(isset($x) == null){echo "";}else{echo site_url()."blog";}?>#article">Article</a></li>
				<li><a href="<?php $x=$this->uri->segment(2); if(isset($x) == null){echo "";}else{echo site_url()."blog";}?>#event">Event</a></li>
				<li><a href="<?php echo site_url() ?>Login" target="">Login</a></li>
			</ul>
		</div>
	</div>
</nav>