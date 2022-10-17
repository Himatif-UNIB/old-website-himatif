<body>
	<div class="home">
		<div class="header-page">
			<h3>Welcome Admin </h3>
		</div>
		<div class="col-md-12 col-sm-12">
			<!--<div class="wid-wrapper col-md-3 col-sm-3">
				<div class="widget">
					<div><span class="fa fa-eye"></span></div>
					<div class="title">Hit Counter</div>
					<div class="isi" style="font-size: 18px;"><u>is comming soon</u></div>
				</div>
			</div>-->
			<div class="wid-wrapper col-md-3 col-sm-3">
				<div class="widget">
					<div><span class="fa fa-file-text"></span></div>
					<div class="title">Total Article</div>
					<div class="isi"><?php echo $jumlahA ?></div>
				</div>
			</div>
			<!--<div class="wid-wrapper col-md-3 col-sm-3">
				<div class="widget">
					<div><span class="fa fa-comments"></span></div>
					<div class="title">Comments</div>
					<div class="isi"style="font-size: 18px;"><u>is comming soon</u></div>
				</div>
			</div>-->
			<!--<div class="wid-wrapper col-md-3 col-sm-3">
				<div class="widget">
					<div><span class="fa fa-clock-o"></span></div>
					<div class="title">Date And Time</div>
					<div class="isi"style="font-size: 18px;"><u>is comming soon</u></div>
				</div>
			</div>
		</div>-->

		<div class="col-md-12">
			<div class="menu1 col-md-7">
				<div class="list-menu">
					<div class="header-menu"><h4>List New Article</h4>
					<a href="<?php echo site_url(); ?>/artikel/allpost/all" class="tomboladdnew">View All</a>
					</div>

					<div class="table-new">
						<table class="table table-striped">
							<thead style="background-color:">
								<tr>
									<td width="3%"><b>#</b></td>
									<td width="65%"><b>Judul Artikel</b></td>
									<td width="15%"><b>Author</b></td>
									<td width="17%"><b>Date</b></td>
								</tr>
							</thead>
							<tbody>
								<?php 
								$x= 0;

								foreach ($artikel as $list){
								$x++;?>
								<tr>
									<td><?php echo $x ?></td>
									<td><?php echo $list['judul'] ?></td>
									<td><?php echo $list['writter'] ?></td>
									<td><?php echo $list['date'] ?></td>
								</tr>
								<?php 
								if($x==7) break;} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!--<div class="menu1 col-md-5">
				<div class="list-menu">
					<div class="header-menu"><h4>Top View Article</h4></div>
					<div class="table-new">
						<table class="table table-striped">
							<thead style="background-color:">
								<tr>
									<td width="70%"><b>Judul Artikel</b></td>
									<td width="15%"><b>Author</b></td>
									<td width="15%"><b>Date</b></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>-->
		</div>
		</div>

		<!--<div class="menu1 col-md-12">
			<div class="col-md-10">
				<div class="list-menu">
					<div class="header-menu"><h4>Top View Article</h4></div>
					<div class="table-new">
						<table class="table table-striped">
							<thead style="background-color:">
								<tr>
									<td width="70%"><b>Judul Artikel</b></td>
									<td width="15%"><b>Author</b></td>
									<td width="15%"><b>Date</b></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
								<tr>
									<td>caracara</td>
									<td>three</td>
									<td>Date</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="trash-article">
					<div class="title">Article In Trash</div>
					<div><span class="fa fa-trash"></span></div>
					<div class="isi"style="font-size: 18px; font-weight: normal"><u>is comming soon</u></div>
				</div>
			</div>
		</div>-->
	</div>
</body>