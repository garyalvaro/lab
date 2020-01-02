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
        
        //Kalau ada message activate
        if($this->session->flashdata('message')):
                $pesan = $this->session->flashdata('message');
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
	<html lang="zxx" class="no-js" style="scroll-behavior: smooth;">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" type="image/png" sizes="17x13" href="<?php echo base_url(); ?>assets/ample/plugins/images/favvicon.png">
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
                                          <?php if($this->session->userdata('logged_in')): ?>
                                          <li><a href="<?php echo base_url(); ?>Jadwal">Jadwal</a></li>
                                          <li><a href="<?php echo base_url();?>Kelas">Kelas</a></li>
                                          <li><a href="<?php echo base_url();?>Rekrut/view_rekrut">Rekrutmen</a></li>
                                          <?php endif; ?>
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

			<!-- Start JUDUL -->
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

					<div class="row fullscreen d-flex align-items-center text-center">
						<div class="banner-content col-lg-12 col-md-12 text-center">
                                                        <?php if($this->session->userdata('logged_in')): ?>
                                                                <h1 class="text-uppercase"> Hai, <?php echo $this->session->userdata('nama'); ?></h1>
                                                                <h3 class="text-secondary">Selamat Datang di LaboratoriumTI</h3>
                                                        <?php else:?>
                                                                <h1 class="text-uppercase"><img src="<?php echo base_url('assets/luis/img/logo_LabTI.png');?>" style="width: 50%;"></h1>
                                                        <?php endif;?>
							
							<br><br>
							<a href="#tentang_section" class="primary-btn text-uppercase">Lebih Lanjut</a>
                                                        <?php if($this->session->userdata('logged_in')): ?>
                                                                <a href="<?php echo base_url();?>Dashboard" class="primary-btn text-uppercase ">Dashboard</a>
                                                        <?php endif;?>
						</div>										
					</div>
				</div>				
 			</section>
			<!-- End JUDUL -->
                        
			<!-- Start SEKILAS LAB TI -->
			<section class="cta-two-area" style="background-color: linen;"id="tentang_section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
                                                        <h1>Sekilas tentang LaboratoriumTI</h1>
						</div>
						<div class="col-sm-12">
							&nbsp;
						</div>
						<div class="col-sm-12">
							<p style="text-align: justify;">
                                                                LaboratoriumTI merupakan sistem lab yang berjalan di bawah ITLG, dimana 	ITLG (Information Technology Laboratory Group) merupakan salah satu wadah yang menaungi sistem laboratorium di program studi Teknologi Informasi Universitas Sumatera Utara. ITLG muncul untuk membantu kepala laboratorium dan dosen dalam hal pengembangan hard skill mahasiswa pada kegiatan praktikum. ITLG bertanggung jawab dalam mempersiapkan mahasiswa yang berkualifikasi spesialis teknologi informasi dan keahlian terpakai dalam mengelola infrastruktur teknologi informasi di masyarkat sesuai dengan visi misi utama program studi Teknologi Informasi. 
								<br><br>
								ITLG mulai dibentuk pada tahun 2013, dimana pada saat itu belum ada wadah yang menaungi seluruh asisten laboratorium di Tenologi Informasi. Berdasarkan saran dan instruksi dari Ketua Program Studi, Muhammad Anggia Muchtar dan Sejretaris Program Studi sekaligus Kepala Laboratorium Jaringan, Muhammad Fadly Syahputra, maka dibentuklah sebuah grup yang diberi nama Information Technology Laboratory Group atau disingkat ITLG yang diketuai oleh Sintong Siregar.
							</p>			
						</div>
					</div>
				</div>	
			</section>
			<!-- End SEKILAS LAB TI -->

			<!--================ Start VISI MISI =================-->
	<section style="padding: 80px;background-color: #CFD1FF;">
	<div class="department_area section_gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="dpmt_courses">
						<div class="row">
							<img src="<?php echo base_url();?>assets/images/visimisi.png" width="100%">
						</div>
                                                <br>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5" style="color: black;">
					<div class="dpmt_right">
						<h3>Visi :</h3>
						<p>
							Menjadi laboratorium komputer yang mendukung pengembangan ilmu pengetahuan dan teknologi informasi serta praktek dalam bidang pendidikan.<br>
						</p>
                                                <br>
						<h3>Misi :</h3>
						<p>
                                                        Menyelenggarakan kegiatan praktikum komputer secara reguler maupun non reguler. <br>
                                                        Menyelenggarakan pendidikan dan pelatihan untuk meningkatkan kompetensi di bidang aplikasi komputer. <br>
                                                        Mengembangkan keahlian dan keterampilan di bidang komputer bagi personalia yang terlibat di Laboratorium TI USU. <br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!--================ End VISI MISI =================-->	
	
			
			<!-- Start ASLAB -->
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
			<!-- End ASLAB -->
			

				
			
			<!-- Start PEREKRUTAN -->
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
			<!-- End PEREKRUTAN -->

			
			
						
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
                                                        <a href="#top"><i class="fa fa-arrow-up"></i></a><br>
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