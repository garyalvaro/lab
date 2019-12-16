<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->userdata('level')!=0)
        redirect('Kelas');
        
if($this->session->flashdata())
{
        if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
        if($this->session->flashdata('add_failed'))
                echo "<span class='add-failed2'></span>";
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

<!--Form Enroll-->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">MASUKKAN KODE KELAS</h3>
            <p class="text-muted m-b-30">Sudah punya kode kelas? Masukkan dibawah.</p>
            
            <?php echo form_open('Kelas/enroll'); ?>
                        <div class="form-group">
                                Kode Kelas :
                                <input type="text" class="form-control p-t-20 p-b-20" style="font-size: 30px; padding: 30px 15px !important;" placeholder="mis: GA12y4" name="kode_enroll" required>
                        </div>
                        
                        <div class="form-group">
                                <input type="submit" name="submit" value="Gabung" class="btn btn-primary">
                                <a href="<?php echo base_url();?>Kelas" class="btn btn-outline btn-default">Kembali </a>
                        </div>
                <?php echo form_close(); ?>
        </div>
</div>

<?php
$this->load->view('dashboard/rightside');
$this->load->view('dashboard/footer');
?>
