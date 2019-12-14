<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
        if($this->session->flashdata('add_failed'))
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
                <?php if($this->session->userdata('level')==0):?>
                <a href="<?php echo base_url();?>Kelas/enroll" class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
                <?php endif; ?>
        </div>
</div>


<?php foreach($kelas as $key): ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="panel panel-default">
                <div class="panel-heading"><?php echo $key->nama_kelas; ?></div>
                <div class="panel-body">
                        <b>Aslab : </b> <?php echo $key->nama_aslab; ?> <br>
                        <b>Ruang : </b> <?php echo $key->nama_ruang; ?> <br>
                        <b>Waktu : </b> <?php echo $key->nama_waktu; ?>
                </div>
                <div class="panel-footer"><a class="btn btn-primary">Detail</a></div>
        </div>
</div>
<?php endforeach; ?>

<a href="<?php echo base_url();?>Kelas/enroll">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bg-primary">
                <div class="panel panel-default bg-primary">
                        <div class="panel-heading bg-primary"></div>
                        <div class="panel-body bg-primary text-success text-center">
                                <h1 class="text-white"><span class="fa fa-plus"></span></h1>
                                <span class="text-white">Tambah Kelas</span>
                        </div>
                        <div class="panel-footer bg-primary"></div>
                </div>
        </div>
</a>

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