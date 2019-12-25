<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

$id_kelas = $this->uri->segment(3);

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $subtitle; ?></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        </div>
</div>

<!--Form Tambah Kelas-->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">TAMBAH Mahasiswa</h3>
            <p class="text-muted m-b-30">Untuk mendaftar mahasiswa di kelas.</p>

                <?php echo form_open('Kelas/tambah_mhs/'.$id_kelas); ?>
                        <table class="table">
                                <thead>
                                        <tr>
                                                <th><input type="checkbox"></th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th></th>
                                                <th></th>
                                        </tr>
                                </thead>
                        </table>

                        <div class="form-group">
                                <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                <a href="<?php echo base_url();?>Kelas" class="btn btn-outline btn-default">Kembali </a>
                        </div>
                <?php echo form_close(); ?>
                        
        </div>
</div>

<?php
$this->load->view('dashboard/rightside');
$this->load->view('dashboard/footer');
?>
