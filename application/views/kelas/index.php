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
                <h4 class="page-title">KELAS</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <a href="<?php echo base_url();?>Kelas/create" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
        </div>
</div>

<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">KELAS</h3>
            <p class="text-muted m-b-30">Daftar semua kelas praktikum</p>
            <div class="table-responsive">

                        <table id="table_id" class="table table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th>ID Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Aslab</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($kelas as $data){?>
                                <tr>
                                        <td><?php echo $data->id_kelas; ?></td>
                                        <td><?php echo $data->nama_kelas; ?></td>
                                        <td><?php echo $data->id_aslab; ?></td>
                                        <td><?php echo $data->tahun_ajaran; ?></td>
                                        <td>
                                                <a href="<?php echo base_url();?>Kelas/view/<?= $data->id_kelas; ?>" class="btn btn-primary" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
<!--
                                                <a href="<?php echo base_url();?>index.php/makanan/edit/<?= $data->id_kelas; ?>" class="btn btn-primary pull-right" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                                <a href="<?php echo base_url();?>index.php/makanan/delete/<?= $data->id_kelas; ?>" class="btn btn-danger pull-right" class="btn btn-success" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
-->
                                        </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
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


<?php
$this->load->view('dashboard/rightside');
?>

<!--JS untuk Tabel-->
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
} );
</script>

<script>
$(document).ready(function() {
$.toast({
         heading: 'Kelas Berhasil ditambahkan',
         text: 'Use the predefined ones, or specify a custom position object.',
         position: 'top-right',
         loaderBg: '#fff',
         icon: 'warning',
         hideAfter: 5000,
         stack: 6
     })
} );
</script>

<?php
$this->load->view('dashboard/footer');
?>