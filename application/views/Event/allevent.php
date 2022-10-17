<body>
	<div class="view">
		<div class="header-page">
			<h3>All Event</h3>
			<div><a href="<?php echo site_url(); ?>/artikel/tambah_artikel" class="hover-a"> Add New</a></div>
		</div>

		<div class="viewpost-wrapper col-md-12">
			<div class="">

				<div class="table-post col-md-12">
					<table class="table table-striped">
						<thead style="background-color:#0EB493">
							<tr>
								<td width="3%"><b>#</b></td>
								<td width="45%"><b>Judul Artikel</b></td>
								<td width="10%"><b>Author</b></td>
								<td width="10%"><b>Status</b></td>
								<td width="10%"><b>Bidang</b></td>
								<td width="5%"><span class="fa fa-eye"></span></td>
								<td width="5%"><span class="fa fa-comments"></span></td>
								<td width="12%"><b>Date</b></td>
							</tr>
						</thead>
						<tbody>
							<?php 
							$x= 0;

							for ($i = 0; $i < count($deptlist); ++$i){
							$x++;?>
							<tr>
								<td><?php echo $i+1 ?></td>
								<td>
									<div class="kolom-tabel" onmouseover="document.getElementById('submenu-tabel<?php echo $x?>').style.display = 'block';" onmouseout="document.getElementById('submenu-tabel<?php echo $x?>').style.display = 'none';">
										<p><?php echo $deptlist[$i]->judul ?></p>
										<div class="menu-kolom-tabel menu1" id="submenu-tabel<?php echo $x ?>">
											<a href="<?php echo site_url(); ?>/event/edit/<?php echo $deptlist[$i]->id_event ?>">Edit</a>
											<a href="<?php echo site_url(); ?>/event/hapus/<?php echo $deptlist[$i]->id_event ?>" onCLick="return Confirm_hapus()">Hapus</a>
											<a href="#">Lihat</a>
										</div>
									</div>
								</td>
								<td><?php echo $deptlist[$i]->writter ?></td>
								<td><?php 
										if($deptlist[$i]->status == 'draft'){
											echo "<i>".$deptlist[$i]->status."</i>";
										}
										else{
											echo $deptlist[$i]->status;
										}
									?>
								</td>
								<td><?php echo $deptlist[$i]->bidang; ?></td>
								<td>1000</td>
								<td>300</td>
								<td><?php echo $deptlist[$i]->date; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="menu2 col-md-12">
					<div class="top-pagination" >
						<?php echo $pagination; ?>
					</div>
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