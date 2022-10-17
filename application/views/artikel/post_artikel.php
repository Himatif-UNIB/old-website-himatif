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
	<?php require_once('tinymce.php') ?>
	<div class="header-page">
		<h3>Add New Article</h3>
	</div>
	<?php 
		if(validation_errors()){
			echo '<div class="alert alert-danger">'; 
			echo validation_errors(); 
			echo '</div>';
		}

		if($status){
			echo '<div class="alert alert-success">'; 
			echo $status; 
			echo '</div>';
		}
	?>
	<form class="input-main col-md-12" name="input-artikel" method="post" action="<?php echo site_url(); ?>/artikel/tambah_artikel/">
		<div class="col-md-9 input-left">
			<div class="row">

				<div class="input-judul col-md-12">
					<p class="form-title">Title</p>
					<input type="text" class="form-control" id="judul" name="judul">
				</div>

				<div class="input-judul col-md-12">
					<p class="form-title">Image Cover</p>
					<input type="text" class="form-control" id="image" name="image" placeholder="Letakan link gambar cover artikel disini, gunakan ratio gambar 1:1">
				</div>

				<div class="input-content col-md-12">
					<p class="form-title">Article</p>
					<textarea class="tinymce-input" id="artikel" name="artikel" ></textarea>
				</div>
			</div>
		</div>

		<div class="col-md-3 input-right">
			<div class="row">
				<div class="set-content col-md-12">
					<p class="form-title">Title</p>

					<div class="col-writter">
						<span class="fa fa-user"></span>
						<input type="text" class="writter" id="writter" name="writter" placeholder="Writter, ex: Yudha Niagara">
					</div>

					<div class="col-date">
						<span class="fa fa-calendar"></span>
						<input class="opsi" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
					</div>

					<div class="col-type">
						<span class="fa fa-tags"></span>
						<p>Type Article</p>
						<div class="group-type">
							<div class="option">
								<input type="radio" class="radioBtn" name="radio" id="Radio" value="event" required>
						  		<p>Event</p>
							</div>
						  	<div class="option">
						  		<input class="radioBtn" type="radio" name="radio" id="Radio" value="article" required>
            					<p>Article & News</p>
							</div>
						</div>
					</div>

					<div class="Box" style="display:none">
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
						<a href="#" class="preview">Preview (in new tab)</a>
					</div>

					<div class="button-input btn-group">
						<button class="btn btn-default" name="sbmt" value="draft">Save Draft</button>
						<button class="btn btn-default" name="sbmt" value="publish">Publish</button>
					</div>
				</div>

				<div class="panel panel-default panel-danger col-md-12">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Please Read Me</h3>
				  	</div>
				  	<div class="panel-body">
				    	Panel contentPanel contentPanel contentPanel contentPanel contentPanel contentPanel content
				  	</div>
				</div>
			</div>
		</div>
	</form>
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
</script>
</html>