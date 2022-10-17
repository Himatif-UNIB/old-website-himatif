<div class="modal fade bs-example-modal-lg modalit" id="modalIt" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
					            <?php foreach ($ketuaIT as $list){ ?>
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
						        	<img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						        	<h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>INFORMATION TECHNOLOGY</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")" ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaIT as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerIT as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>

		<div class="modal fade bs-example-modal-lg modalpm" id="modalPm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
			    				<?php foreach ($ketuaPM as $list){ ?>
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
						                <img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						                <h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>Pengabdian Masyarakat</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")"  ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaPM as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerPM as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>

		<div class="modal fade bs-example-modal-lg " id="modalMinatbakat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
					                <?php foreach ($ketuaMinatbakat as $list){ ?>
						            <img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						                <h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>Minat & Bakat</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")"  ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaMinatbakat as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerMinatbakat as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>

		<div class="modal fade bs-example-modal-lg " id="modalDanus" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
					                <?php foreach ($ketuaDanus as $list){ ?>
						            <img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						                <h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>Kewirausahaan</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")"  ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaDanus as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerDanus as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>

		<div class="modal fade bs-example-modal-lg " id="modalKerohanian" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
					                <?php foreach ($ketuaKerohanian as $list){ ?>
						            <img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						                <h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>Kerohanian</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")"  ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaKerohanian as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerKerohanian as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>

		<div class="modal fade bs-example-modal-lg " id="modalPendidikan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  	<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      	<div class="service-desc1">
						<div class="container">
			    			<div class="row">
						        <div class="col-lg-3 col-md-3 col-sm-3 foto-ketua-bidang">
					                <?php foreach ($ketuaPendidikan as $list){ ?>
						            <img class="img-thumbnail img-responsive" src="<?php echo $list['link_image']?>" alt="foto ketua bidang">
						                <h5>Ketua Bidang</h5>
						        </div>
						        <div class="col-lg-9 col-md-9 col-sm-9 info-bidang">
					                <h3>Pengembangan Sumber Daya Mahasiswa</h3>
					                <span class="sline"></span>
					                <h4>Ketua Bidang : </h4>
					                    <h5><?php echo $list['nama']."&nbsp(".$list['npm'].")" ?></h5>
					                <?php } ?>
					                <h4>Anggota :</h4>
					                <ol>
					                <?php 
					                $x=1; 
					                foreach ($anggotaPendidikan as $list1){ ?>
					                    <li><?php echo $x.".&nbsp".$list1['nama']."&nbsp(".$list1['npm'].")"?></li>
					                <?php $x++; 
					                }?>
					                </ol>
						        </div>
						    </div>
						</div>
						<div class="container-fluid proker">
						    <h4>Program Kerja</h4>
						    <div class="table-responsive">
						        <table class="table table-bordered">
						            <tr>
						                <td width="7%">No</td>
						                <td width="93%">Nama Program Kerja</td>
						            </tr>
					                <?php 
					                $x=1; 
					                foreach ($prokerPendidikan as $list3){ ?>
					                <tr>
					                	<td><?php echo $x; ?></td>
					                	<td><?php echo $list3['nama_proker']; ?></td>
					                </tr>
					                 <?php $x++; 
					                }?>
						        </table>
						    </div>
						</div>
					</div>
			    </div>
			</div>
		</div>