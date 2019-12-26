<?php 
        //Kalau berhasil login akan menampilkan keterangan
        if($this->session->flashdata('login_success')):
                $pesan = $this->session->flashdata('login_success');
        endif;
        //Kalau gagal login akan menampilkan keterangan
        if($this->session->flashdata('login_failed')):
                $pesan = $this->session->flashdata('login_failed');
        endif;
        //Kalau belum login akan menampilkan keterangan
        if($this->session->flashdata('login_dulu')):
                $pesan = '<b class="text-danger">'.$this->session->flashdata('login_dulu').'</b>';
        endif;
        
        //Kalau berhasil login akan menampilkan keterangan
        if($this->session->flashdata('berhasil_regis')):
                $pesan = $this->session->flashdata('berhasil_regis');
        endif;
?>

<?php //SESSION LEVEL
if($this->session->userdata('level') == 0) 
        $level = "Mahasiswa";
elseif($this->session->userdata('level') == 1) 
        $level = "Asisten Lab";
elseif($this->session->userdata('level') == 2) 
        $level = "BPH";
?>

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
		<title>Laboratorium TI</title>

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
			<link rel="stylesheet" href="<?php echo base_url();?>assets/luis/Education-Doc/css/style.css">
                        <link rel="manifest" href="<?php echo base_url();?>manifest.json">

           
		</head>
		<body id="top">	
                                
		  <header id="header" id="home">                        
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/luis/img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="<?php echo base_url();?>">Beranda</a></li>
			          <li><a href="<?php echo base_url();?>lab/faq">Faq</a></li>

			        
			          <?php if($this->session->userdata('logged_in')): ?>
			           
			          <li class="menu-has-children"><a href="#">Logout</a>
			            <ul>
			            		<h4>Hello, <b><?php echo $this->session->userdata('nama');?></b></h4>
                                                Login as <i class="text-dark"><?php echo $level; ?></i>
                                                
                                                <?php echo form_open('lab/logout'); ?>
                                                <button class="btn btn-danger btn-block btn-sm py-1 mt-2 rounded-0">Logout</button>
                                                <?php echo form_close();?>
						</ul>
			          </li>
					  
                                <?php else: ?>
					  	
			          <li class="menu-has-children"><a href="#">Login</a>
			            <ul>    
			              <?php echo form_open('lab/login'); ?>
			              <li><input type="text" name="nim" placeholder="NIM" class="form-control rounded-0 px-2 py-1 my-2" autocomplete="off"></li>
			              <li><input type="password" name="pass" placeholder="Password" class="form-control rounded-0 px-2 py-1 my-2"></li>
			              <li><input type="submit" name="submit" value="Login" class="primary-btn btn-block my-1"></li>
                                      <li><br><small>Belum punya akun? <a href="<?php echo base_url();?>Lab/register">Register disini.</a></small></li>
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
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
                                
<!-- POPUP ALERT -->               
<div class="row float-right mt-5 pt-5">
<?php if($this->session->flashdata()):?>
        <div class="popup-alert">
          <div class="alert alert-info alert-dismissible fade show" role="alert">
          <?php echo $pesan; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        </div>
<?php endif; ?>
</div>

                                
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								SELAMAT DATANG	
							</h1>
							<br><br>
							<a href="#tentang_section" class="primary-btn text-uppercase">Lebih Lanjut</a>
                                                        <?php if($this->session->userdata('logged_in')): ?>
                                                                <a href="<?php echo base_url();?>Dashboard" class="primary-btn text-uppercase ">Dashboard</a>
                                                        <?php endif;?>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start cta-two Area -->
			<section class="cta-two-area" style="background-color: linen;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<center>
								<h1>Tentang TI USU</h1>
						</div>
						<div class="col-sm-12">
							&nbsp;
						</div>
						<div class="col-sm-12">
							<p style="text-align: justify;color: black;">Program studi yang pertama kali terbentuk pada Fasilkom-TI adalah Program Studi S-1 Ilmu Komputer di bawah naungan FMIPA-USU pada tanggal 22 November 2001. Kemudian seiring berkembangnya keilmuan di bidang komputasi, maka dibentuklah Program Studi baru yaitu Program Studi S-1 Teknologi Informasi yang juga dibawah naungan FMIPA-USU pada awal tahun 2007. Namun karena pada masa itu program studi Teknologi Informasi belum dikenal dalam nomenklatur Indonesia, pendirian program studi ini disetujui dengan nama program studi Teknik Perangkat Lunak melalui Surat Keputusan Ditjen Dikti Nomor 1629/D/T/2007 tanggal 6 Juli 2007. 
								<br><br>
								Pada akhir tahun 2007 , tepatnya pada tanggal 27 November 2007, Ditjen Dikti mengeluarkan surat keputusan tentang Penataan dan Kodifikasi Program Tinggi Nomor 163/KEP/DIKTI/2007 untuk mengatur penamaan progam studi (S-1) bidang komputer dan kemudian mengalami penyempurnaan dengan keluarnya Surat Edaran Ditjen Dikti Nomor 1030/D/T/2010. Dengan keluarnya Surat Edaran Ditjen Dikti tersebut, perguruan tinggi diberi kesempatan untuk menata ulang penamaan program studi yang dikelolanya. Universitas Sumatera Utara dengan demikian menetapkan kembali nama untuk kedua program studi nya menjadi Program Studi (S-1) Ilmu Komputer dan Program Studi (S-1) Teknologi Informasi.
								<br><br>
								Perkembangan IPTEK di USU terus berlanjut, terbentuklah jenjang pendidikan lanjut dari program S-1 pada tahun 2009 yaitu Program Studi Magister (S-2) Teknik Informatika, dengan dikeluarkannya SK Ditjen Dikti Nomor 935/H5.1.R/SK/PRS/2009.
							</p>			
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->

			<!--================ Start Department Area =================-->
	<section style="padding: 80px;background-color: azure;">
	<div class="department_area section_gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="dpmt_courses">
						<div class="row">
							<img src="<?php echo base_url();?>assets/images/visimisi.png">
						</div>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="dpmt_right">
						<h3>Visi :</h3>
						<p style="color: black;">
							Menjadi laboratorium komputer yang mendukung pengembangan ilmu pengetahuan dan teknologi informasi serta praktek dalam bidang pendidikan.<br>
						</p>
						<h3>Misi :</h3>
						<p>
							<ol style="color: black;">
								<li>Menyelenggarakan kegiatan praktikum komputer secara reguler maupun non reguler.</li>
								<li>&#x25cf;</li>
								<li>Menyelenggarakan pendidikan dan pelatihan untuk meningkatkan kompetensi di bidang aplikasi komputer.</li>
								<li>&#x25cf;</li>
								<li>Mengembangkan keahlian dan keterampilan di bidang komputer bagi personalia yang terlibat di Laboratorium TI USU.</li>
							</ol>		
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!--================ End Department Area =================-->	
	
			
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap" id="aslab_section">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Asisten Lab</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">

							<?php foreach ($aslab as $key): ?>
								<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="iimg-fluid foto-aslab" src="https://portal.usu.ac.id/photos/<?php echo $key->nim;?>.jpg" alt="">
									</div>							
								</div>
								<div class="details">
                                                                        <h4><?php echo $key->nama_aslab;?></h4>
									<p><?php echo $key->nim;?></p>
								</div>
							</div>	
							<?php endforeach; ?>


						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			

				
			
			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap" id="rekrut_section">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Ayo Jadi Asisten Lab (Aslab)</h1>
							<p>
								Pengalaman mengajar di Lab dapat mengembangkan keberanian dan melatih kalian saat berbicara di depan umum dan di depan banyak orang. Ayo tunggu apa lagi? <br> Bergabunglah bersama kami di LaboratoriumTI!
							</p>
							<a class="primary-btn" href="<?php echo base_url();?>Rekrut">DAFTAR</a>								
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->

			
			
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
                                                        Copyright &copy; 2019 - Kelompok 10 IMK
                                                </p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


<!--JS untuk Alert TimeOut-->
<script>
window.setTimeout(function () {
    $(".alert-info").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 4000);
</script>

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
                
<script>
if ('serviceWorker' in navigator) {    console.log("Will the service worker register?");    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){        console.log("Yes, it did.");     }).catch(function(err) {        console.log("No it didn't. This happened:", err)    });
 }
</script>
                
	</html>