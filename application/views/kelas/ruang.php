<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('login_success'))
                echo "<span class='login-success'></span>";
        else if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
        else if($this->session->flashdata('add_failed'))
                echo "<span class='add-failed'></span>";
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

                        <table id="table_id" class="table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th>No.</th>
                                        <th>Nama Kelas</th>
                                        <th>Aslab</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach($kelas as $data){?>
                                <tr>
                                        <td class="p-l-20"><?php echo $no++; ?></td>
                                        <td class="p-l-20"><?php echo $data->nama_kelas; ?></td>
                                        <td class="p-l-20"><?php echo $data->id_aslab; ?></td>
                                        <td class="p-l-20"><?php echo $data->tahun_ajaran; ?></td>
                                        <td class="p-l-20">
                                                <a href="<?php echo base_url();?>Kelas/view/<?= $data->id_kelas; ?>" class="btn btn-primary" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span></a>
<!--
                                                <a href="<?php echo base_url();?>index.php/makanan/edit/<?= $data->id_kelas; ?>" class="btn btn-primary pull-right" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                                <a href="<?php echo base_url();?>index.php/makanan/delete/<?= $data->id_kelas; ?>" class="btn btn-danger pull-right" class="btn btn-success" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
-->
                                        </td>
                                </tr>
                                <?php } ?>
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


<?php
$this->load->view('dashboard/footer');
?>