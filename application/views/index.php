

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style>
		.form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
	</style>
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/style.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssg/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssg/bootstrap.min.css');?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
</head>
<body>
	<!-- <div class="form_error">
          <?php echo validation_errors(); ?>
          <?php if($this->session->flashdata()):?>
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
                        <?php endif; ?>
        </div> -->

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
	<?php if($this->session->userdata('logged_in')): ?>
	<a href="#">LOGOUT</a>
	<br>
	<?php echo "Hello, ".$this->session->userdata('nim');?>
	<?php echo form_open('lab/logout'); ?>
	<button class="btn btn-danger btn-sm">Logout</button>
	<?php echo form_close();?>

	<?php else: ?>
	<a href="#">LOGIN</a>
	
	<?php echo form_open('lab/login'); ?>
	<label>NIM :</label>
	<input type="text" name="nim" class="form-control-sm" name="nim">
	<br><br>
	<label>Password :</label>
	<input type="password" name="pass" class="form-control-sm" name="pass">
	<br><br>
	<input type="submit" name="submit" value="Login" class="btn btn-info btn-sm">
	<?php echo form_close(); ?>    
                                  
<!-- <?php if($this->session->userdata('logged_in')): ?>
<?php 
if($this->session->userdata('level')==0){
	echo "Hola";
}
elseif ($this->session->userdata('level')==2){
	echo "BPK";
}
elseif ($this->session->userdata('level')==1)
{
	echo "Hakuna matata";
}
else{
	echo "LONGLOSTBOY";
}
?>                                          
<?php endif; ?>  -->
<br><br>
	<a href="<?php echo base_url()."index.php/lab/register"; ?>">Register</a>
    <?php endif; ?>
</body>
</html>
