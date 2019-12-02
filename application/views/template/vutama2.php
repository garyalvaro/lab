<?php 
        //Kalau berhasil login akan menampilkan keterangan
        if($this->session->flashdata('login_success')):
                $pesan = $this->session->flashdata('login_success');
        endif;

        //Kalau gagal login akan menampilkan keterangan
        if($this->session->flashdata('login_failed')):
                $pesan = $this->session->flashdata('login_failed');
        endif;

        //Kalau ada kesalahan saat login akan menampilkan keterangan
        if($this->session->flashdata('errors')):
                $pesan = '<b class="text-danger">'.$this->session->flashdata('errors').'</b>';
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
        </head>
        <body>	

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
                                                <a href="#aslab" class="primary-btn text-uppercase">Lebih Lanjut</a>
                                        </div>										
                                </div>
                        </div>					
                </section>
                <!-- End banner Area -->

                <!-- Start feature Area -->
                <section class="feature-area">
                        <div class="container">
                                <div class="row">
                                <!-- 	<div class="col-lg-4">
                                                <div class="single-feature">
                                                        <div class="title">
                                                                <h4>Learn Online Courses</h4>
                                                        </div>
                                                        <div class="desc-wrap">
                                                                <p>
                                                                        Usage of the Internet is becoming more common due to rapid advancement
                                                                        of technology.
                                                                </p>
                                                                <a href="#">Join Now</a>									
                                                        </div>
                                                </div>
                                        </div> -->
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4">
                                                <div class="single-feature">
                                                        <div class="title">
                                                                <h4>Jadwal Lab</h4>
                                                        </div>
                                                        <div class="desc-wrap">
                                                                <p>
                                                                        Melihat jadwal Belajar di lab <br>
                                                                        Hari <br>
                                                                        Waktu<br>
                                                                        Tempat 
                                                                </p>
                                                                <a href="#">Lihat</a>									
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-4">
                                                <div class="single-feature">
                                                        <div class="title">
                                                                <h4>Perekrutan Aslab</h4>
                                                        </div>
                                                        <div class="desc-wrap">
                                                                <p>
                                                                        Jika Anda merasa cukup kompeten dan siap untuk menjadi Asisten Lab di
                                                                        Teknologi Informasi USU, silahkan lampirkan berkas - berkas yang 
                                                                        diperlukan.
                                                                </p>
                                                                <a href="#">Lihat</a>									
                                                        </div>
                                                </div>
                                        </div>		
                                        <div class="col-lg-2"></div>										
                                </div>
                        </div>	
                </section>
                <!-- End feature Area -->

                <!-- Start popular-course Area -->
                <section class="popular-course-area section-gap" id="aslab">
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
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p1.jpg" alt="">
                                                                </div>							
                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 1
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Betty										
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p2.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 2
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Bob										
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p3.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 3
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Kristel									
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p4.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 4
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Crystal									
                                                                </p>
                                                        </div>
                                                </div>
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p1.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 5
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Anto									
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p2.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 6
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Anton									
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p3.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 7
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Antori									
                                                                </p>
                                                        </div>
                                                </div>	
                                                <div class="single-popular-carusel">
                                                        <div class="thumb-wrap relative">
                                                                <div class="thumb relative">
                                                                        <div class="overlay overlay-bg"></div>	
                                                                        <img class="img-fluid" src="<?php echo base_url();?>assets/luis/img/p4.jpg" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="details">
                                                                <a href="#">
                                                                        <h4>
                                                                                Aslab 8
                                                                        </h4>
                                                                </a>
                                                                <p>
                                                                        Antony										
                                                                </p>
                                                        </div>
                                                </div>							
                                        </div>
                                </div>
                        </div>	
                </section>
                <!-- End popular-course Area -->







                <!-- Start cta-one Area -->
                <section class="cta-one-area relative section-gap">
                        <div class="container">
                                <div class="overlay overlay-bg"></div>
                                <div class="row justify-content-center">
                                        <div class="wrap">
                                                <h1 class="text-white">Ayo Jadi Instruktor(Asisten Lab)</h1>
                                                <p>
                                                        Pengalaman mengajar di Lab dapat mengembangkan keberanian dan melatih kalian saat berbicara di depan umum dan di depan banyak orang. Ayo tunggu apa lagi? Join sekarang bersama ITLG!
                                                </p>
                                                <a class="primary-btn wh" href="#">Apply</a>								
                                        </div>					
                                </div>
                        </div>	
                </section>
                <!-- End cta-one Area -->




                <!-- start footer Area -->		
                <footer class="footer-area section-gap">
                        <div class="container">
                                <div class="footer-bottom row align-items-center justify-content-between">
                                        <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright @kelompok 10 &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
</html>
