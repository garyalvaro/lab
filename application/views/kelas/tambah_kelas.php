<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

//if($this->session->userdata('logged_in'))
//{
//       
//}

if($this->session->flashdata())
{
        if($this->session->flashdata('login_success'))
                echo "<span id='login-success'></span>";
}

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

                        <?php echo form_open('Kelas/create'); ?>
                                <div class="form-group">
                                        Praktikum Mata Kuliah
                                        <select name="nama_kelas" class="form-control" required>
                                                <option disabled selected>--Pilih Mata Kuliah--</option>
                                                <?php foreach($matkul as $key):?>
                                                <option value="<?= $key->singkatan_matkul;?>"><?= $key->nama_matkul." - Semester ".$key->semester;?></option>
                                                <?php endforeach;?>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        Kom
                                        <select name="kom" class="form-control" required>
                                                <option disabled selected>--Pilih Kom--</option>
                                                <option value="A">Kom. A</option>
                                                <option value="B">Kom. B</option>
                                                <option value="C">Kom. C</option>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        Aslab
                                        <select name="id_aslab" class="form-control" required>
                                                <option disabled selected>--Pilih Aslab--</option>
                                                <?php foreach($aslab as $key):?>
                                                <option value="<?= $key->id_aslab;?>"><?= $key->nama_aslab;?></option>
                                                <?php endforeach;?>
                                        </select>
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
