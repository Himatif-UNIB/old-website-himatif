<body>
	<div class="view">
		<div class="header-page">
			<h3>Form Edit</h3>
		</div>

		<div class="col-content ketua col-md-8">
			<h4>Edit Data Pembina</h4>
			<div class="col-md-12">
		        <div class="add-anggota" style="display">
		        	<?php foreach($nama as $list){ ?>
					<form class="col-md-11" action="<?php echo site_url() ?>/struktur/updatestruktur/<?php echo $list['id'] ?>" method="post" >
						<div class="grup">
							<span class="info-title">Jabatan</span>
							<input type="text" class="" id="jabatan" name="jabatan" value="<?php echo $list['jabatan']; ?>">
						</div>
						<div class="grup">
							<span class="info-title">Nama</span>
							<input type="text" class="" id="nama" name="nama" value="<?php echo $list['nama']; ?>">
						</div>
						<div class="grup">
							<span class="info-title">NPM</span>
							<input type="text" class="" id="nip/npm" name="nip/npm" value="<?php echo $list['nip/npm']; ?>">
						</div>
						<div class="grup">
							<span class="info-title">Link Image</span>
							<input type="text" class="" id="image" name="image" value="<?php echo $list['link-image']; ?>">
						</div>
						<button class="button-content" name="sbmt">Update</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</body>