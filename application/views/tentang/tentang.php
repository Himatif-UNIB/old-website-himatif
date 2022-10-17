<html>
<head>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
</head>
<body>
	<?php require_once('tinymce.php') ?>
	<div class="header-page">
		<h3>Tentang Himatif</h3>
	</div>

	<div class="input-main col-md-12" id="sample">
		<div class="col-md-12 input-left">
			<div class="row">
				<div class="input-judul col-md-12">
					<p class="form-title">Preview</p>
					<?php foreach($artikel as $list){ ?>
					<div class="sec-title text-center mb50">
						<h2><?php echo $list['judul'] ?></h2>
					</div>
					<div class="col-md-12">
						<div class="service-item">
							<div class="service-desc" style="overflow">
								<?php echo $list['isi'] ?>
								<?php  }?>
							</div>
						</div>
					</div>	

					<div class="edit-tentang col-md-3">
						<a class="button-content" id="Button-edit">Edit</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form class="input-main col-md-12" name="input-artikel" method="post" action="<?php echo site_url(); ?>tentanghimatif/update" id="edit-form" style="display: none">
		<div class="col-md-12 input-left">
			<div class="row">
				
				<div class="input-judul col-md-12">
					<p class="form-title">Title</p>
					<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $list['judul'] ?>">
				</div>

				<div class="input-content col-md-12">
					<p class="form-title">Isi</p>
					<textarea class="tinymce-input" id="isi" name="isi" value="" style="height: 300px;"><?php echo $list['isi'] ?></textarea>
				</div>
				
				<div class="edit-tentang col-md-3">
					<button class="button-content">Update</button>
					</form>
					<a class="button-content" id="cancel">Cancel</a>
				</div>
			</div>
		</div>
</body>

<script>
   $(document).ready(function(){
		$('input[type="radio"]').click(function(){
        if($(this).attr("value")=="article"){
            $(".Box").hide('slow');
        }
        if($(this).attr("value")=="event"){
            $(".Box").show('slow');

        }        
    });
})
$('input[type="radio"]').trigger('click');

$(document).ready(function () {
   $("#Button-edit").click(function () {
        $("#edit-form").toggle("slow");
        $("#sample").toggle("slow");
   });
   $("#cancel").click(function () {
        $("#edit-form").toggle("slow");
        $("#sample").toggle("slow");
   });

});
</script>
</html>