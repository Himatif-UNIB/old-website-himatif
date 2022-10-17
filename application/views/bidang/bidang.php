<body>
	<div class="bid-wrapper">
		<div class="header-page">
			<h3>Bidang <?php echo $bidang; ?></h3>
		</div>

		<div class="col-md-12">
		<div class="col-content ketua col-md-8">
			<h4>Ketua</h4>
			<div class="col-md-12">
				<table class="table table-responsive table-striped">
		            <tr>
		                <td>NPM</td>
		                <td>Nama</td>
		                <td>Aksi</td>
		            </tr>
		            <?php
		            $x = 1; 
		            foreach ($ketua as $list){ ?>
		            <tr>
		                <td><?php echo $list['npm'];?></td>
		                <td><?php echo $list['nama']; ?></td>
		                <td><a id="editketua" href="">Edit</a></td>
		            </tr>
		            <?php $x++; } ?>
		        </table>
		        <button class="btn btn-default" id="1">Edit Ketua</button>
		        <div class="add-anggota" id="2" style="display: none">
					<form class="col-md-11" action="<?php echo site_url(); ?>/bidang/editketua/<?php echo $list['bidang']; ?>" method="post" >
						<div class="grup">
							<span class="info-title">Nama</span>
							<input type="text" class="" id="nama" name="nama" value="<?php echo $list['nama']; ?>">
						</div>
						<div class="grup">
							<span class="info-title">NPM</span>
							<input type="text" class="" id="npm" name="npm" value="<?php echo $list['npm'];?>">
						</div>
						<div class="grup">
							<span class="info-title">Link Image</span>
							<input type="text" class="" id="link" name="link" value="<?php echo $list['link_image'];?>">
						</div>
						<button class="button-content" name="sbmt">Update</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-content anggota col-md-8">
			<h4>Anggota</h4>	
			<div class="col-md-12">
				<table class="table table-responsive table-striped">
		            <tr>
		                <td>No</td>
		                <td>NPM</td>
		                <td>Nama</td>
		                <td>Aksi</td>
		            </tr>
		            <?php
		            $x = 1; 
		            foreach ($anggota as $list2){ ?>
		            <tr>
		                <td><?php echo "$x"; ?></td>
		                <td><?php echo $list2['npm']; ?></td>
		                <td><?php echo $list2['nama']; ?></td>
		                <td><a href="<?php echo site_url(); ?>/bidang/hapus_anggota/<?php echo $list2['id_anggota']; echo "/".$this->uri->segment(3); ?>" onCLick="return Confirm_hapus()">Hapus</a> | <a href="<?php echo site_url(); ?>bidang/edit_anggota/<?php echo $list2['id_anggota'] ?>">Edit</a>
		                </td>
		            </tr>
		            <?php $x++; } ?>
		        </table>
			</div>
			<button class="btn btn-default" id="tambah-anggota">Tambah Anggota</button>
			<div class="add-anggota" id="tambah-form" style="display: none">
				<form class="col-md-11" action="<?php echo site_url(); ?>/bidang/tambahanggota/<?php echo $this->uri->segment(3); ?>" method="post" >
					<div class="grup">
						<span class="info-title">Nama</span>
						<input type="text" class="" id="nama" name="nama" value="">
					</div>
					<div class="grup">
						<span class="info-title">NPM</span>
						<input type="text" class="" id="npm" name="npm" value="">
					</div>
					<button class="button-content" name="sbmt">Add</button>
				</form>
			</div>
		</div>

		<div class="col-content anggota col-md-8">
			<h4>Program Kerja</h4>	
			<div class="col-md-12">
				<table class="table table-responsive table-striped">
		            <tr>
		                <td>No</td>
		                <td>Nama</td>
		                <td>Aksi</td>
		            </tr>
		            <?php
		            $x = 1; 
		            foreach ($proker as $list3){ ?>
		            <tr>
		                <td><?php echo "$x"; ?></td>
		                <td><?php echo $list3['nama_proker']; ?></td>
		                <td><a href="<?php echo site_url(); ?>/bidang/hapus_proker/<?php echo $list3['id']; echo "/".$this->uri->segment(3); ?>" onCLick="return Confirm_hapus()">Hapus</a> | <a href="<?php echo site_url(); ?>bidang/edit_proker/<?php echo $list3['id'] ?>">Edit</a>
		                </td>
		            </tr>
		            <?php $x++; } ?>
		        </table>
			</div>
			<button class="btn btn-default" id="tambah-proker">Tambah Proker</button>
			<div class="add-anggota" id="tambah-proker-form" style="display: none">
				<form class="col-md-11" action="<?php echo site_url(); ?>/bidang/tambahproker/<?php echo $this->uri->segment(3); ?>" method="post" >
					<div class="grup">
						<span class="info-title">Nama</span>
						<input type="text" class="" id="nama" name="nama" value="">
					</div>
					<button class="button-content" name="sbmt">Add</button>
				</form>
			</div>
		</div>

	</div>
</body>

<script language="javascript">
    function Confirm_hapus(){
	    if(confirm("KONFIRMASI PENGHAPUSAN DATA\nTekan OK untuk melanjutkan penghapusan data")==true){
            return true;
	    }else{
            return false;
	    }
    }

	$(document).ready(function () {
   		$("#1").click(function () {
        	$("#2").toggle("slow");
   		});

   		$("#tambah-proker").click(function () {
        	$("#tambah-proker-form").toggle("slow");
   		});

   		$("#tambah-anggota").click(function () {
        	$("#tambah-form").toggle("slow");
   		});
	});

	
</script>