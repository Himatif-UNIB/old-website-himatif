<div class="kolom-sidebar">
	<!--<div class="input-group wow fadeInRight">
	  	<input type="text" class="form-control" placeholder="Search for...">
	  	<span class="input-group-btn">
	    	<button class="btn btn-default" type="button">Go!</button>
	  	</span>
	</div>-->

	<div class="connect wow fadeInRight">
		<h3>Let's Connect With Us</h3>
		<div class="sosmed">
			<a href=""><span class="fa fa-facebook" style="padding-left:12px;"></span></a>
			<a href=""><span class="fa fa-youtube" style="padding-left:7px;"></span></a>
			<a href=""><span class="fa fa-instagram" style="padding-left:7px;"></span></a>
			<a href=""><span class="fa fa-envelope" style="padding-left:px;"></span></a>
		</div>
	</div>

	<div class="recent-post wow fadeInRight" >
		<h5 class="title">Recent Post</h5>
		<ul>
			<?php 
			$x=0;

			foreach ($artikel as $list) {
			$x++; ?>

			<li><a href="<?php echo site_url()."blog/viewartikel/".$list['slink'] ?>"><span class="fa"></span><?php echo $list['judul'] ?></a></li>

			<?php 
			if($x==10) break;} 
			?>
			<div class="sli"></div>
		</ul>
	</div>

	<div class="recent-post wow fadeInRight">
		<h5 class="title">Instagram</h5>
		<iframe src="https://snapwidget.com/embed/code/190662" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:px solid black; overflow:hidden; width:100%; height:330px; margin-top:-10px"></iframe>
	</div>
</div>