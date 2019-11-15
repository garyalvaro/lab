
<!DOCTYPE html>
<html>
<head>
	<title>bpk</title>
	<style>
		.form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
	</style>
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/style.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssg/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssg/bootstrap.min.css');?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
</head>
<body>
	

        <div class="container row">
        <?php if($this->session->flashdata()):?>
                <div class="popup-alert">
                  <!-- <div class="alert alert-info alert-dismissible fade show" role="alert"> -->
                  	<!-- <div class="alert alert-danger"> -->
                  <?php 
                                //Kalau berhasil login akan menampilkan keterangan
                                if($this->session->flashdata('login_success')):
                                        echo $this->session->flashdata('login_success');
                                endif;

                                //Kalau gagal login akan menampilkan keterangan
                                if($this->session->flashdata('login_failed')):
                                        echo $this->session->flashdata('login_failed');
                                endif;

                                //Kalau ada kesalahan saat login akan menampilkan keterangan
                                if($this->session->flashdata('errors')):
                                        echo '<b class="text-danger">'.$this->session->flashdata('errors').'</b>';
                                endif;

                                //Kalau ada kesalahan saat login akan menampilkan keterangan
                                if($this->session->flashdata('belum_login')):
                                        echo $this->session->flashdata('belum_login');
                                endif;
                        ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <!-- </div> -->
                </div>
        <?php endif; ?>
        </div>



	<br>
	<?php ($this->session->userdata('logged_in')); ?>
	<a href="#">LOGOUT</a>
	<br>
	<?php
	echo "ini bph";
	?>  
	<br>  
	<?php echo "Hello, ".$this->session->userdata('nim');?>
	<?php echo form_open('lab/logout'); ?>
	<button class="btn btn-danger btn-sm">Logout</button>
	<?php echo form_close();?>                      

</body>
</html>
