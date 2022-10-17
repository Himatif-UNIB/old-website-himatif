<body>
	<div class="view">
		<div class="header-page">
			<h3>Form Edit</h3>
		</div>

		<div class="col-content ketua col-md-8">
			<h4>Edit Data Anggota Bidang</h4>
			<div class="col-md-12">
		        <div class="add-anggota" style="display">
		        	<?php foreach($anggota as $list){ ?>
					<form class="col-md-11" action="<?php echo site_url() ?>/bidang/updateanggota/<?php echo $list['id_anggota']; echo "/".$list['bidang']; ?>" method="post" >
						
						<div class="grup">
							<span class="info-title">Nama</span>
							<input type="text" class="" id="nama" name="nama" value="<?php echo $list['nama']; ?>">
						</div>
						<div class="grup">
							<span class="info-title">NPM</span>
							<input type="text" class="" id="npm" name="npm" value="<?php echo $list['npm']; ?>">
						</div>

						<button class="button-content" name="sbmt">Update</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</body>