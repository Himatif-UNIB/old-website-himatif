<body>
	<div class="view">
		<div class="header-page">
			<h3>Form Edit</h3>
		</div>

		<div class="col-content ketua col-md-8">
			<h4>Edit Data Program Kerja</h4>
			<div class="col-md-12">
		        <div class="add-anggota" style="display">
		        	<?php foreach($proker as $list){ ?>
					<form class="col-md-11" action="<?php echo site_url() ?>/bidang/updateproker/<?php echo $list['id']; echo "/".$list['bidang']; ?>"" method="post" >
						
						<div class="grup">
							<span class="info-title">Nama</span>
							<input type="text" class="" id="nama" name="nama" value="<?php echo $list['nama_proker']; ?>">
						</div>

						<button class="button-content" name="sbmt">Update</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</body>