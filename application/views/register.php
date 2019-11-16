
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style>
		.form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
	</style>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
</head>
<body>
	<div class="form_error">
          <?php echo validation_errors(); ?>
        </div>

	
	<!--Register Area -->
	<?php echo form_open('lab/register'); ?>
	<div class="col-12 col-md-10 col-lg-12">
		<div class="contact-form">
			<h4>Register</h4>
			<div class="row">
					<div class="group">
						<label>NIM :</label>
						<input type="number" name="nim">
						<span class="highlight"></span>
						<span class="bar"></span>	
					</div>
				
					<div class="group">
						<label>Nama :</label>
						<input type="text" name="nama">
						<span class="highlight"></span>
						<span class="bar"></span>	
					</div>
			
					<div class="group">
						<label>KOM :</label>
						<input type="text" name="kom">
						<span class="highlight"></span>
						<span class="bar"></span>
					</div>
				
					<div class="group">
						<label>Email :</label>
						<input type="text" name="email">
						<span class="highlight"></span>
						<span class="bar"></span>
						
					</div>
				
					<div class="group">
						<label>Password :</label>
						<input type="password" name="pass">
						<span class="highlight"></span>
						<span class="bar"></span>
						
					</div>
			
					<div class="group">
						<label>Konfirmasi Password :</label>
						<input type="password" name="konf_pass">
						<span class="highlight"></span>
						<span class="bar"></span>
						
					</div>
				</div>
				<br>
				<div class="col-12">
					<button type="submit" class="btn btn-info btn-sm">Register</button>
				</div>
			</div>

		</div>
	</div>
	<?php echo form_close(); ?>
	<a href="<?php echo base_url()."index.php/lab/index"; ?>">Home</a>
</body>
</html>