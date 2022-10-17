<html>
<head>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.css"/>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
</head>
<body>
	<div class="header-page">
		<h3>Pamflet Event</h3>
		<?php 
		if($status =='nonaktif'){ ?> 
			<div class="stat-pamflet" id="off"><P>TIDAK AKTIF</P><span class="fa fa-thumbs-down"></span></div>
		<?php }
		else{ ?>
			<div class="stat-pamflet" id="on"><P>AKTIF</P><span class="fa fa-thumbs-up"></span></div>
		<?php } ?>
	</div>
	
	<?php 
		if($status =='nonaktif'){ ?>
			<div class="status-pamflet">
				<p>Pamflet event sedang dalam mode <i>Tidak Aktif</i>, apakah anda ingin mengaktifkannya ? </p>
				<div>
					<a class="hover-a1" value="YA" id="Button1">YA</a><a href="#" class="hover-a1" id="Button2">TIDAK</a>
				</div>
			</div>

			<div class="set-pamflet col-md-8 col-md-push-2" id="showdiv" style="display:none;">
				<h3>Setting Content</h3>
				<form class="set-content" method="post" action="<?php echo site_url(); ?>/pamflet/simpanpamflet/">
					<div class="row">
						<div class="input-judul col-md-12">
							<p class="form-title">Title</p>
							<input type="text" class="form-control" id="title" name="title">
						</div>

						<div class="input-judul col-md-12">
							<p class="form-title">Image Cover</p>
							<input type="text" class="form-control" id="image" name="image" placeholder="">
						</div>

						<div class="input-judul col-md-12">
							<p class="form-title">Link Reference</p>
							<input type="text" class="form-control" id="link" name="link" placeholder="">
						</div>
						<div class="button-input btn-group">
							<button class="btn btn-default" name="sbmt" value="ya">Save Content</button>
							<button class="btn btn-default" name="sbmt" value="tidak">Cancel</button>
						</div>
					</div>
				</form>
				<div class="pamflet-content">
					<h3>Content Sample</h3>
					<img src="<?php echo base_url(); ?>assets/img/ixi.png">
				</div>
			</div>
	<?php }
		else{ ?>
			<div class="pamflet-aktif col-md-12 " id="showdiv" style="display:block;">
				<?php 
					$x= 0;
					foreach ($pamflet as $list){
					$x++;?>
				<div class="col-content col-md-6">
					<h4>Data Content</h4>	
					<div class="info-group col-md-12">
						<p class="info-title">Title</p>
						<input type="text" class="" id="title" name="title" value="<?php echo $list['judul']; ?>" disabled>
					</div>

					<div class="info-group col-md-12">
						<p class="info-title">Image Cover</p>
						<input type="text" class="" id="image" name="image" value="<?php echo $list['image']; ?>" disabled>
					</div>

					<div class="info-group col-md-12">
						<p class="info-title">Link Reference</p>
						<input type="text" class="" id="link" name="link" value="<?php echo $list['link']; ?>" disabled>
					</div>
					<div class="button-grup col-md-5 col-md-push-7">
						<a href="<?php echo site_url(); ?>/pamflet/hapuspamflet"class="button-content" onCLick="return Confirm_hapus()">Delete</a>
						<a class="button-content" id="Button-edit">Edit</a>
					</div>
					<?php if($x==1) break;} ?>
					<?php 
					$x= 0;
					foreach ($pamflet as $list){
					$x++;?>
					<div class="col-edit col-md-12" id="edit-form" style="display: none">
						<form class="" method="post" action="<?php echo site_url()."/pamflet/updatepamflet/".$list['id_event']; ?>">
							<h3>Form Edit</h3>
							
							<div class="input-judul col-md-12">
								<p class="form-title">Title</p>
								<input type="text" class="form-control" id="title" name="title">
							</div>

							<div class="input-judul col-md-12">
								<p class="form-title">Image Cover</p>
								<input type="text" class="form-control" id="image" name="image" placeholder="">
							</div>

							<div class="input-judul col-md-12">
								<p class="form-title">Link Reference</p>
								<input type="text" class="form-control" id="link" name="link" placeholder="">
							</div>
							<div class="button-grup bg col-md-5 pull-right">
								<button class="button-content" name="sbmt" value="ya">Cancel </button>
								<button class="button-content" name="sbmt" value="tidak">Update </button>
							</div>
						</form>
						<?php if($x==1) break;} ?>
					</div>
				</div>
				
				<div class="col-md-6 pull-right" style="padding-right: 0">
					<div class="col-content">
						<h3>Pamflet Preview</h3>
						<?php 
						$x= 0;
						foreach ($pamflet as $list){
						$x++;?>
						<div class="banner-content">
							<div class="header-event">
							<h4><?php echo $list['judul']; ?></h4>
							</div>
							<div class="pamflet">
								<img src="<?php echo $list['image']; ?>">
							</div>
							<div class="footer-event">
								<a href="<?php echo $list['link']; ?>"><h4>Open Event and Read More</h4></a>
							</div>
						</div>
						<?php if($x==1) break;} ?>
					</div>
				</div>
			</div>
	<?php }?>	

</body>
<script>
function Confirm_hapus(){
    if(confirm("Menghapus data content akan membuat pamflet dalam mode tidak aktif Apakah anda ingin menghapus pamflet event ini ?")==true){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function () {
   $("#Button1").click(function () {
        $("#showdiv").toggle("slow");
   });

   $("#Button-edit").click(function () {
        $("#edit-form").toggle("slow");
   });
});
</script>

</html>