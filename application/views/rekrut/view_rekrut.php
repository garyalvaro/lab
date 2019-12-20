<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
		if($this->session->flashdata('login_success'))
						echo "<span id='login-success'></span>";
		else if($this->session->flashdata('add_success'))
						echo "<span id='add-success'></span>";
		else if($this->session->flashdata('add_failed'))
						echo "<span id='add-failed'></span>";
				else if($this->session->flashdata('rekrut_success'))
						echo "<span id='rekrut_success'></span>";
				else if($this->session->flashdata('rekrut_failed'))
						echo "<span id='rekrut_failed'></span>";
}

?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- TITLE -->
<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title">LIST CALON ASISTEN PRAKTIKUM</h4>
		</div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
						<a href="<?php echo base_url();?>Rekrut" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="fa fa-file-text"></span> &nbsp; Form Pendaftaran</a>
		</div>
</div>

<div class="col-sm-12">
	<div class="white-box">
		<h3 class="box-title m-b-0">LIST</h3>
		<p class="text-muted m-b-30">
			Daftar semua pendaftar asisten praktikum. <br><br>
			*CV = Curiculum Vitae <br>
			*SL = Surat Lamaran
		</p>
		<div class="table-responsive">
			<table id="table_id" class="table table-striped table-bordered" >
				<thead>
				<tr class="thead-dark">
					<th>NIM</th>
					<th>Nama</th>
					<th colspan="2">Matkul Pilihan 1</th>
					<th colspan="2">Matkul Pilihan 2</th>
					<th colspan="2">Berkas</th>
					<?php if ($this->session->userdata('level')==2) { ?>
						<th>Detail</td>
					<?php } ?>
<!--                                                                <th>Status</th>-->
				</tr>
				</thead>
				<tbody>
					<?php 
						foreach($rekrut as $data){
						   
					?>
					<tr>
						<td class="p-l-20">
							<?php echo $data->nim;?>
							<input type="text" name="nim" id="nim" value="<?php echo $data->nim;?>" hidden>
						</td>
						<?php $nama = $this->Nilai_model->get_by_id_column_general('user','nama', 'nim', $data->nim); 
							foreach ($nama as $key) { ?>
								<td class="p-l-20">
									<?php if ($data->status==0) { ?>
										<b class="text-info"><?php echo $key->nama; ?></b>
									<?php } ?>
									<?php if ($data->status==1) { ?>
										<b class="text-success"><?php echo $key->nama; ?></b>
									<?php } ?>

									<?php if ($data->status==2) { ?>
										<b class="text-danger"><?php echo $key->nama; ?></b>
									<?php } ?>
									<input type="text" name="nama_aslab" id="nama_aslab" value="<?php echo $key->nama;?>" hidden>
								</td>
							<?php }
						?>
						<?php $matkul1 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul1);
							foreach ($matkul1 as $key) { ?>
								<td class="p-l-20"><?php echo $key->nama_matkul; ?></td>
							<?php }
						?>
						<td class="p-l-20"><b><?php echo $data->ip1; ?></b></td>
						<?php $matkul2 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul2);
							foreach ($matkul2 as $key) { ?>
								<td class="p-l-20"><?php echo $key->nama_matkul; ?></td>
							<?php }
						?>
						<td class="p-l-20"><b><?php echo $data->ip2; ?></b></td>
						
<!--
						<td class="p-l-20">
							<button type="button" onclick="detail('<?php echo $data->nim;?>')" class="btn btn-xs btn-info">Detail</button>
							<button type="button" onclick="edit('<?php echo $data->nim;?>')" class="btn btn-xs btn-warning">Edit</button>
						</td>
-->
														
						 <td class="p-l-20">
							 <a href="<?php echo base_url('assets/uploads/').$data->cv;?>" class="btn btn-primary btn-sm" target="_blank">CV</a>
						</td> 								 
														<td>                                                                         
							<a href="<?php echo base_url('assets/uploads/').$data->lamaran;?>" class="btn btn-info btn-sm" target="_blank">SL</a>
						</td>
						<?php if ($this->session->userdata('level')==2) { ?>
							<td class="p-l-20">
								<button type="button" onclick="detail('<?php echo $data->nim;?>')" class="btn btn-warning btn-sm">Detail</button>
							</td>

						<?php } ?>	
						<!-- Modal -->
						<div id="modalData" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Detail Data Mahasiswa</h4>
										</div>
										<div class="modal-body">
												<div class="form-group">
													<label for="NIM" style="width: 30%;">NIM</label>: 
													<?php echo $data->nim; ?>
												</div>
												<div class="form-group">
													<label for="Nama_lengkap" style="width: 30%;">Nama Lengkap</label>: 
													<?php $nama = $this->Nilai_model->get_by_id_column_general('user','nama', 'nim', $data->nim); 
													foreach ($nama as $key) { ?>
														<?php echo $key->nama; ?>
													<?php }
													?>
												</div>
												<div class="form-group">
													<label style="width: 30%;">Matkul pilihan 1</label>: 
													<?php $matkul1 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul1);
														foreach ($matkul1 as $key) { ?>
															<?php echo $key->nama_matkul; ?>
															<?php echo "(<b>".$data->ip1."</b>)"; ?>
														<?php }
													?>
												</div>
												<div class="form-group">
													<label style="width: 30%;">Matkul pilihan 2</label>: 
													<?php $matkul2 = $this->Nilai_model->get_by_id_column_general('matkul','nama_matkul', 'singkatan_matkul', $data->matkul2);
														foreach ($matkul2 as $key) { ?>
															<?php echo $key->nama_matkul; ?>
															<?php echo "(<b>".$data->ip2."</b>)"; ?>
														<?php }
													?>
												</div>
												<div class="form-group">
													<label style="width: 30%;">Alasan Mendaftar</label>: <br>
													<?php echo $data->alasan; ?>
												</div>
												<div class="form-group">
													<label style="width: 30%;">Status</label>: 
													<?php 
														if ($data->status==0) {
															echo "<b class='text-info'>Belum diterima sebagai Asisten Lab</b>";
														}
														else if ($data->status==1)
															echo "<b class='text-success'>Diterima sebagai Asisten Lab</b>";
														else
															echo "<b class='text-danger'>Ditolak sebagai Asisten Lab</b>";
													?>
												</div>
												
											</div>
									<div class="modal-footer">
										<?php $nama = $this->Nilai_model->get_by_id_column_general('user','nama', 'nim', $data->nim); 
										foreach ($nama as $key) { ?>
											<a class="btn btn-success" href="<?php echo base_url('Rekrut/konfirmasi/').$data->nim;?>" onClick="return confirm('Anda yakin ingin menerima <?php echo $key->nama; ?> sebagai Asisten lab?');"><span class="fa fa-check"></span>&nbsp;Terima</a>
										<a class="btn btn-danger" href="<?php echo base_url('Rekrut/batalkonfirmasi/').$data->nim;?>" onClick="return confirm('Anda yakin ingin menolak <?php echo $key->nama; ?> sebagai Asisten lab?');"><span class="fa fa-times"></span>&nbsp;Tolak</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>			
										<?php } ?>
										
									</div>
								</div>

							</div>
						</div>
															
<!--
						<td class="p-l-20">
								<input type="checkbox" name="toggle" id="" value="" data-toggle="toggle" data-off="NonAktif" data-on="Aktif" data-onstyle="success" data-offstyle="danger">
						</td>
-->
					</tr>
					<?php }  ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



<?php
$this->load->view('dashboard/rightside');
?>

<!--JS untuk Tabel-->
<script>
$(document).ready(function() {
	$('#table_id').DataTable();
} );
</script>

<script type="text/javascript">
	function detail(nim)
	{
		$.ajax({
			url:"<?php echo base_url('rekrut/detail/')?>"+nim,
			success:function(data){
				console.log(data);
				var data = JSON.parse(data);
				$('#modalData').modal('show');
				$.each(data,function(key,val){
					$('#nim').val(val.nim);
					$('#nama').val(val.nama_aslab);
					// $('#jenkel').val(val.jenkel);
					// $('#alamat').val(val.alamat);
					// $('#fakultas').val(val.fakultas);
					// $('#prodi').val(val.prodi);
				});
			}
		})
	}
</script>

<script>
	  $('input[name=toggle]').change(function(){
		var nim = $('#nim').val();
		var nama_aslab = $('#nama_aslab').val();
		
		$.ajax({
		  type:'get',
		  data:'nim='+nim+'&nama_aslab='+nama_aslab,
		  url:'<?php echo base_url(); ?>Rekrut/status_aktif';
		  });
		});
</script>

 <?php
$this->load->view('dashboard/footer');
?>