
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
}

?>

<!-- TITLE -->
<div class="row bg-title">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h4 class="page-title">LIST CALON ASISTEN PRAKTIKUM</h4>
		</div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
		</div>
</div>

<div class="col-sm-12">
		<div class="white-box">
			<h3 class="box-title m-b-0">LIST</h3>
			<p class="text-muted m-b-30">Daftar semua pendaftar asisten praktikum</p>
			<div class="table-responsive">
				<table id="table_id" class="table table-striped table-bordered" >
						<thead>
						<tr class="thead-dark">
								<th>NIM</th>
								<th>Nama</th>
								<th colspan="2">Matkul Pilihan 1</th>
								<th colspan="2">Matkul Pilihan 2</th>
								<th >Berkas</th>
						</tr>
						</thead>
						<tbody>
							<?php 
								foreach($rekrut as $data){
								   
							?>
							<tr>
								<td class="p-l-20"><?php echo $data->nim;?></td>
								<?php $nama = $this->Nilai_model->get_by_id_column_general('user','nama', 'nim', $data->nim); 
									foreach ($nama as $key) { ?>
										<td class="p-l-20"><?php echo $key->nama; ?></td>
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
								<td class="p-l-20"><button type="button" onclick="detail('<?php echo $data->nim;?>')" class="btn btn-xs btn-info">Detail</button>
										<button type="button" onclick="edit('<?php echo $data->nim;?>')" class="btn btn-xs btn-warning">Edit</button></td>
								<!-- <td class="p-l-20"><a href="<?php echo base_url('assets/uploads/').$data->cv;?>" class="btn btn-info hidden-xs hidden-sm waves-effect waves-light">CV</a>
									<a href="<?php echo base_url('assets/uploads/').$data->lamaran;?>" class="btn m-l-10 btn-info hidden-xs hidden-sm waves-effect waves-light"> Doc</a>
								</td> -->
							</tr>
							<?php }  ?>
						</tbody>
						<tfoot>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
				</table>
			</div>
		</div>
</div>


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
					<fieldset disabled>
						<div class="form-group">
								<label for="NIM">NIM</label>
								<input type="text" class="form-control" name="nim" id="nim" readonly>
						</div>
						<div class="form-group">
							<label for="Nama_lengkap">Nama Lengkap</label>
							<input type="text" class="form-control" name="nama" id="nama" readonly>
						</div>
						
						<div class="form-group">
							<label for="Fakultas">Fakultas</label>
							<input type="text" class="form-control" name="fakultas" id="fakultas" readonly>
						</div>
						<div class="form-group">
							<label for="Prodi">Program Studi</label>
							<input type="text" class="form-control" name="prodi" id="prodi" readonly>
						</div>
					</div>
				</fieldset>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
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
					$('#nama').val(val.nama_lengkap);
					// $('#jenkel').val(val.jenkel);
					// $('#alamat').val(val.alamat);
					// $('#fakultas').val(val.fakultas);
					// $('#prodi').val(val.prodi);
				});
			}
		})
	}
</script>

 <?php
$this->load->view('dashboard/footer');
?>