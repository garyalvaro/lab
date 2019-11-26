	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<style>
			.form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
		</style>
		<title>Register</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/nice-select.css">							
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/animate.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/owl.carousel.css">			
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/jquery-ui.css">			
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/css/main.css">
		</head>
		<body>
			
        </div>
				  <header id="header" id="home">
	  		
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="<?php echo base_url();?>assets/luis/img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home</a></li>
			          <li><a href="courses.html">Kelas</a></li>
			          <li><a href="events.html">Jadwal</a></li>


			          <?php if($this->session->userdata('logged_in')): ?>
			          <li class="menu-has-children"><a href="#">Logout</a>
			            <ul>
			            		<?php echo "Hello, ".$this->session->userdata('nim');?>
								<?php echo form_open('lab/logout'); ?>
								<button class="btn btn-danger btn-sm">Logout</button>
								<?php echo form_close();?>
						</ul>
			          </li>
					  
					  <?php else: ?>
			          <li class="menu-has-children"><a href="#">Login</a>
			            <ul>    
			              <?php echo form_open('lab/login'); ?>
			              <li><input type="text" name="nim" placeholder="NIM" class="form-control-sm"></li>
			              <li><input type="password" name="pass" placeholder="Password" class="form-control-sm"></li>
			              <li><input type="submit" name="submit" value="Login" class="btn btn-info btn-sm"></li>
			              <?php echo form_close(); ?>
			            </ul>
			          </li>
			          <?php endif; ?>

			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="col-lg-5 col-md-6 search-course-left"> 
							<img src="<?php echo base_url('assets/luis/img/logo.png');?>" style="width: 500px;">
						</div>
						<div class="banner-content col-lg-5 col-md-12">
							<div class="col-lg-12 col-md-12 search-course-right mt-5 py-5">
								<div class="form_error">
         						 <?php echo validation_errors(); ?>
         						</div>
								<h4 class="text-white pb-20 text-center mb-30">Register</h4>	
								<?php echo form_open('lab/register'); ?>	
								<input type="number" class="form-control" name="nim" placeholder="NIM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'" >
								<input type="text" class="form-control" name="nama" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" >
								<input type="text" class="form-control" name="kom" placeholder="KOM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'KOM'" >
								<input type="text" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" >
								<input type="password" class="form-control" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" >
								<input type="password" class="form-control" name="konf_pass" placeholder="Konfirmasi Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password'" >
														
								<button class="primary-btn text-uppercase">Submit</button>
							<?php echo form_close(); ?>
						</div>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
	
			

			<script src="<?php echo base_url();?>assets/luis/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url();?>assets/luis/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?php echo base_url();?>assets/luis/js/easing.min.js"></script>			
			<script src="<?php echo base_url();?>assets/luis/js/hoverIntent.js"></script>
			<script src="<?php echo base_url();?>assets/luis/js/superfish.min.js"></script>	
			<script src="<?php echo base_url();?>assets/luis/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url();?>assets/luis/js/jquery.magnific-popup.min.js"></script>	
    		<script src="<?php echo base_url();?>assets/luis/js/jquery.tabs.min.js"></script>						
			<script src="<?php echo base_url();?>assets/luis/js/jquery.nice-select.min.js"></script>	
			<script src="<?php echo base_url();?>assets/luis/js/owl.carousel.min.js"></script>									
			<script src="<?php echo base_url();?>assets/luis/js/mail-script.js"></script>	
			<script src="<?php echo base_url();?>assets/luis/js/main.js"></script>	
		</body>
	</html>