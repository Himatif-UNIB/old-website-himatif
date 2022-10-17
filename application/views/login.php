<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Dashboard HIMATIF</title> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
</head>
<body>
	<div class="login-container">
		<div class="row">
			<div class="main col-md-4 col-sm-8 col-xs-10 col-xs-offset-1 col-sm-offset-2 col-md-offset-4">
				<section class="judul">
					<h1><b>HIMATIF UNIB</b></h1>
					<P>Portal - Dashboard HIMATIF</P>
				</section>
				<section class="form-login">
					<article>
						<form class="form-horizontal" action="<?php echo site_url();?>/login/aksi_login" method="post">
							<div class="form-group">
								<div class="col-sm-12 ">
									<input class="form-control" type="text" placeholder="Username" name="username">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-12 ">
									<input class="form-control" type="password" placeholder="Password" name="password">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<button class="btn btn-warnin col-sm-12" type="submit">Login</button>
								</div>
							</div>
						</form>
					</article>
				</section>
			</div>
		</div>
	</div>
</body>
</html>