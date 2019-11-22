<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');
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
            <h3 class="box-title m-b-0">TAMBAH KELAS</h3>
            <p class="text-muted m-b-30">Untuk menambah kelas atau praktikum mata kuliah baru.</p>
            <button class="tst1 btn btn-info">Info Message</button>

                        <?php echo form_open('Kelas/create'); ?>
                                <div class="form-group">
                                        Nama Kelas
                                        <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" required>
                                </div>
                                
                                <div class="form-group">
                                        Kom
                                        <input type="text" name="kom" class="form-control" placeholder="Masukkan Kom" required>
                                </div>

                                
                                <div class="form-group">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                </div>
                        <?php echo form_close(); ?>
                        
        </div>
</div>


<?php
$this->load->view('dashboard/rightside');
$this->load->view('dashboard/footer');
?>
