<html>
<head>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
	<script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.css"/>
</head>
<body>
	<div class="form-edit">
		<?php require_once('tinymce.php') ?>
		<div class="header-page">
			<h3>Edit Article</h3>
		</div>
		<?php 
			if(validation_errors()){
				echo '<div class="alert alert-danger">'; 
				echo validation_errors(); 
				echo '</div>';
			}
		?>
		<?php foreach ($artikel as $val) {?>
		<form class="input-main col-md-12" name="input-artikel" method="post" action="<?php echo site_url()?><?php if($this->uri->segment(1)=="event"){echo "/event";} else{echo "/artikel";}; ?>/update/<?php if($this->uri->segment(1)=="event"){echo $val->id_event;} else{echo $val->id_artikel;} ?>">
			<div class="col-md-9 input-left">
				<div class="row">

					<div class="input-judul col-md-12">
						<p class="form-title">Title</p>
						<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $val->judul; ?>">
					</div>

					<div class="input-judul col-md-12">
						<p class="form-title">Image Cover</p>
						<input type="text" class="form-control" id="image" name="image" value="<?php echo $val->image; ?>">
					</div>

					<div class="input-content col-md-12">
						<p class="form-title">Article</p>
						<textarea class="tinymce-input" id="artikel" name="artikel" ><?php echo $val->artikel; ?></textarea>
					</div>
				</div>
			</div>

			<div class="col-md-3 input-right">
				<div class="row">
					<div class="set-content col-md-12">
						<p class="form-title">Title</p>
						
						<div class="col-writter">
							<span class="fa fa-user"></span>
							<input type="text" class="writter" id="writter" name="writter" value="<?php echo $val->writter; ?>">
						</div>

						<div class="col-date">
							<span class="fa fa-calendar"></span>
							<input class="opsi" id="date" name="date" placeholder="MM/DD/YYY" type="text" value="<?php echo $val->date; ?>"/>
						</div>

						<div class="Box" style="display:<?php if($this->uri->segment(1) == "event"){echo "block"; } else{echo "none";} ?>">
	            			<div class="col-writter">
								<span class="fa fa-institution"></span>
								<select class="opsi" id="bidang" name="bidang">
									<option value="Inti">Bidang Acara</option>
									<option value="Inti">Inti</option>
								    <option value="IT">IT</option>
								    <option value="Kerohanian">Kerohanian</option>
								    <option value="Kewirausahaan">Kewirausahaan</option>
								    <option value="Minat Bakat">Minat Bakat</option>
								    <option value="Pendidikan">Pendidikan</option>
								    <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
								</select>
							</div>
            			</div>

						<div class="col-preview">
							<span class="fa fa-eye"></span>
							<a href="#">Preview (in new tab)</a>
						</div>

						<div class="button-input btn-group">
							<button class="btn btn-default">Update</button>
							<a class="btn btn-default" href="<?php echo site_url(); ?><?php if($this->uri->segment(1) == "event"){echo "/event"; } else{echo "/artikel/allpost/all";} ?>">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php } ?>
	</div>
</body>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.input-right form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        orientation: "top right",
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
</html>