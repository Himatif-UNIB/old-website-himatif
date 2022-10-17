<body>
	<div class="view">
		<div class="header-page">
			<h3>All Post</h3>
			<div><a href="<?php echo site_url(); ?>/artikel/tambah_artikel" class="hover-a"> Add New</a></div>
		</div>

		<div class="viewpost-wrapper col-md-12">
			<div class="">
				<div class="menu1 col-md-12">
					<a href="<?php echo site_url(); ?>/artikel/allpost/all">All (<?php echo $jumlahA ?>)</a>
					<a href="<?php echo site_url(); ?>/artikel/allpost/publish">Publish (<?php echo $jumlahP ?>)</a>
					<a href="<?php echo site_url(); ?>/artikel/allpost/draft">Draft (<?php echo $jumlahD ?>)</a>
				</div>

				<!--<div class="menu2 col-md-12">
					<div class="view-by">
						<p style="display: inline">View by</p>
						<select class="" id="writter" name="writter" >
							<option value="one">Date Descending</option>
						    <option value="two">Date Ascending</option>
						    <option value="three">Most View</option>
						    <option value="four">Most Comment</option>
						</select>
					</div>
					
					<div class="top-pagination" >
						<?php echo $pagination; ?>
					</div>
				</div>-->
				<div class="table-post col-md-12">
					<table class="table table-striped">
						<thead style="background-color:#0EB493">
							<tr>
								<td width="3%"><b>#</b></td>
								<td width="50%"><b>Judul Artikel</b></td>
								<td width="10%"><b>Author</b></td>
								<td width="15%"><b>Status</b></td>
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
											<a href="<?php echo site_url(); ?>/artikel/edit/<?php echo $deptlist[$i]->id_artikel ?>">Edit</a>
											<a href="<?php echo site_url(); ?>/artikel/hapus/<?php echo $deptlist[$i]->id_artikel ?>" onCLick="return Confirm_hapus()">Hapus</a>
											
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