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
		<h4 class="page-title">Aslab</h4>
	</div>
	<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
		<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
	</div>
</div>
<div class="col-sm-12">
	<div class="white-box">
		<h3 class="box-title m-b-30">PENDAFTARAN ASLAB</h3>
		<?php foreach ($rekrut as $data) {	?>
		<ul class="list-unstyled multi-steps">
			<li <?php
				if ($data->status==1)
					echo 'class="is-active"';
				else if ($data->status==3)
					echo 'class="is-actives"';
				else if ($data->status==0)
					echo 'class="is-active"';
				?>
			>
				Pemrosesan Berkas</li>
			<li <?php
				if ($data->status==2)
					echo 'class="is-active"';
				?>>Wawancara</li>
			<li <?php
				if ($data->status==4)
					echo 'class="is-active"';
				else if ($data->status==5)
					echo 'class="is-actives"';

				?>
			class="is-actives">Hasil</li>
		</ul>
		<br/>
		<br/>
		<br/>
		
			<div class="form-group">
				<label for="NIM" style="width: 25.5%;">NIM</label>: 
				<?php echo $data->nim; ?>
			</div>
			<div class="form-group">
				<label for="Nama_lengkap" style="width: 25.5%;">Nama Lengkap</label>: 
				<?php $nama = $this->Nilai_model->get_by_id_column_general('user','nama', 'nim', $data->nim); 
				foreach ($nama as $key) { ?>
					<?php echo $key->nama; ?>
				<?php }
				?>
			</div>
			<div class="form-group">
				<label style="width: 25.5%;">Matkul pilihan 1</label>: 
				<?php $matkul1 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul1);
					foreach ($matkul1 as $key) { ?>
						<?php echo $key->nama_matkul; ?>
						<?php echo "(<b>".$data->ip1."</b>)"; ?>
					<?php }
				?>
			</div>
			<div class="form-group">
				<label style="width: 25.5%;">Matkul pilihan 2</label>: 
				<?php $matkul2 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul2);
					foreach ($matkul2 as $key) { ?>
						<?php echo $key->nama_matkul; ?>
						<?php echo "(<b>".$data->ip2."</b>)"; ?>
					<?php }
				?>
			</div>
			<div class="form-group">
				<label style="width: 25.5%;">Alasan Mendaftar</label>: <br>
				<?php echo $data->alasan; ?>
			</div>
			<div class="form-group row">
				<?php if ($this->session->userdata('level')==2) { ?>
					<label class="col-sm-3 col-form-label text-info" >Status</label>
					<div class="col-sm-9">
						<select class="form-control"	name="status">
							<option value="0" <?php echo (0==$data->status?'selected':''); ?>>Berkas belum diproses</option>
							<option value="1" <?php echo (1==$data->status?'selected':''); ?>>Dalam proses pengolahan berkas</option>
							<option value="2" <?php echo (2==$data->status?'selected':''); ?>>Berkas diterima</option>
							<option value="3" <?php echo (3==$data->status?'selected':''); ?>>Berkas ditolak</option>
							<option value="4" <?php echo (4==$data->status?'selected':''); ?>>Terima sebagai aslab</option>
							<option value="5" <?php echo (5==$data->status?'selected':''); ?>>Tolak sebagai aslab</option>
						</select>
					</div>
				<?php } else { ?>	
					<label class="col-sm-3 col-form-label" >Status</label>
					<div class="col-sm-9">
				<?php 
					if ($data->status==0) {
						echo ": <b>Berkas belum diproses</b>";
					}
					else if ($data->status==1)
						echo ": <b class='text-warning'>Dalam proses pengolahan berkas</b>";
					else if ($data->status==2)
						echo ": <b class='text-info'>Berkas Anda diterima silahkan mengikuti tes wawancara dan tes pengetahuan aslab. Jadwal akan tertera di baris keterangan</b>";
					else if ($data->status==3)
						echo ": <b class='text-danger'>Maaf Berkas anda ditolak</b>";
					else if ($data->status==4)
						echo ": <b class='text-success'>Selamat, Anda diterima sebagai Asisten Lab</b>";
					else
						echo ": <b class='text-danger'>Maaf, Anda ditolak sebagai Asisten Lab</b>";
				?>
			<?php } ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="NIM" class="col-sm-3">Keterangan</label>
				<div class="col-sm-9">: <?php echo $data->komentar; ?></div>
			</div>
		<?php } ?>

	</div>
</div>
<!-- FORM -->
<!-- <?php foreach($user as $key): ?>
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
<?php endforeach; ?> -->


<?php
$this->load->view('dashboard/rightside');
?>


<?php
$this->load->view('dashboard/footer');
?>