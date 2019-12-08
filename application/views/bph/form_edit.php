<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('delete_success'))
                echo "<span class='delete_success'></span>";
}

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <h4 class="page-title">Edit Data User</h4>
        </div>
        <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        </div>
</div>

<!-- FORM -->
<?php foreach($user as $key): ?>
<div class="col-sm-12">
<div class="white-box">
	<h3 class="box-title m-b-0">Data User</h3>
        <br><br>
        <div class="form-body">
	<?php echo form_open('Bph/edit/'.$key->nim.''); ?>
		<div class="form-group">
                        <label for="nim" class="control-label">NIM</label>
                        <input type="text" class="form-control bg-white" placeholder="NIM" id="nim" name="nim" value="<?= $key->nim;?>" readonly>
		</div>
                
                <div class="form-group">
                        <label for="nama" class="control-label">Nama</label>
                        <input type="text" class="form-control bg-white" placeholder="Nama" id="nama" name="nama" value="<?= $key->nama;?>" autocomplete="off">
		</div>
                
                <div class="form-group">
                        <label for="level" class="control-label">Level</label>
                        <select class="form-control" id="level" name="level" required>
                                <?php if($key->level == 0):?>
					<option value="0" selected>Mahasiswa</option>
					<option value="1">Aslab</option>
					<option value="2">BPH</option>
                                <?php elseif($key->level == 1):?>
                                        <option value="0">Mahasiswa</option>
					<option value="1" selected>Aslab</option>
					<option value="2">BPH</option>
                                <?php elseif($key->level == 2):?>
                                        <option value="0">Mahasiswa</option>
					<option value="1">Aslab</option>
					<option value="2" selected>BPH</option>
                                <?php endif;?>
                        </select>
		</div>
                
                <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="email" class="form-control bg-white" placeholder="email" id="email" name="email" value="<?= $key->email;?>" autocomplete="off">
		</div>
                
                <div class="form-group">
                        <label for="pass" class="control-label">Password</label>
                        <input type="password" class="form-control bg-white" placeholder="pass" id="pass" name="pass" value="<?= $key->pass;?>">
		</div>
                
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                <a href="<?php echo base_url();?>Bph" class="btn btn-default">Batal</a>
                
	<?php echo form_close(); ?>
        </div>
</div>
</div>
<?php endforeach; ?>


<?php
$this->load->view('dashboard/rightside');
?>


<?php
$this->load->view('dashboard/footer');
?>