<body>
	<div class="view">
		<div class="header-page">
			<h3>Struktur HIMATIF</h3>
		</div>

		<div class="viewpost-wrapper col-md-12">
			<div class="">
				<div class="table-post col-md-9">
					<table class="table table-striped">
						<thead style="background-color:#0EB493">
							<tr>
								<td width="25%"><b>Jabatan</b></td>
								<td width="35%"><b>Nama</b></td>
								<td width="30%"><b>NIP/NPM</b></td>
								<td width="10%"><b>Aksi</b></td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($nama as $list){ ?>
							<tr>
								<td><?php echo $list['jabatan']; ?></td>
								<td><?php echo $list['nama']; ?></td>
								<td><?php echo $list['nip/npm']; ?></td>
								<td><a href="<?php echo site_url(); ?>struktur/edit/<?php echo $list['id'] ?>">Edit</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
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
</script>