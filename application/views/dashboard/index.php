<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('rekrut_success'))
                echo "<span class='rekrut_success'></span>";
}

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h4 class="page-title">DASHBOARD</h4>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        </div>
</div>

<!--BPH--------------------------->
<?php if($this->session->userdata('level')==2): ?>
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">PENJADWALAN</h3>
                        <br>
                    <a href="<?php echo base_url();?>Jadwal">
                            <div class="col-lg-4 col-xs-12 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="<?php echo base_url();?>Jadwal/create">
                            <div class="col-lg-4 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-calendar-plus text-lg"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Jadwal</b>
                            </div>
                    </a>

                    <a href="<?php echo base_url();?>Jadwal/ruang">
                            <div class="col-lg-4 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-building-o"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Ruangan</b>
                            </div>
                    </a>

            </div>
        </div>
        
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">KELAS</h3>
                <br>
                    <a href="<?php echo base_url();?>Kelas">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-view-list"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Kelas Praktikum</b>
                            </div>
                   </a>
                   <a href="<?php echo base_url();?>Kelas/create">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-playlist-plus"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Kelas</b>
                            </div>
                    </a>
            </div>
        </div>
        
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">USER & ASLAB</h3>
                <br>
                    <a href="<?php echo base_url();?>Bph">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-users"></i> </button> <br><br>
                                    <b class="text-dark">Daftar User</b>
                            </div>
                    </a>
                    <a href="<?php echo base_url();?>Rekrut/view_rekrut">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-account-multiple-plus"></i> </button> <br><br>
                                    <b class="text-dark">Perekrutan Aslab</b>
                            </div>
                    </a>
            </div>
        </div>


<!--ASLAB--------------------------->
<?php elseif($this->session->userdata('level')==1): ?>
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">PENJADWALAN</h3>
                        <br>
                    <a href="<?php echo base_url();?>Jadwal">
                            <div class="col-lg-4 col-xs-12 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="<?php echo base_url();?>Jadwal/create">
                            <div class="col-lg-4 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-calendar-plus text-lg"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Jadwal</b>
                            </div>
                    </a>

                    <a href="<?php echo base_url();?>Jadwal/ruang">
                            <div class="col-lg-4 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-building-o"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Ruangan</b>
                            </div>
                    </a>
                    
            </div>
        </div>
        
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">KELAS</h3>
                <br>
                    <a href="<?php echo base_url();?>Kelas">
                            <div class="col-lg-12 col-xs-12 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-view-list"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Kelas Praktikum</b>
                            </div>
                    </a>
            </div>
        </div>
        
        
<!--MHS--------------------------->
<?php elseif($this->session->userdata('level')==0): ?>
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">PENJADWALAN</h3>
               <br>
                    <a href="<?php echo base_url();?>Jadwal">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="<?php echo base_url();?>Jadwal/ruang">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-building-o"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Ruangan</b>
                            </div>
                    </a>

            </div>
        </div>
        
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">KELAS</h3>
                <br>
                    <a href="<?php echo base_url();?>Kelas">
                            <div class="col-lg-12 col-xs-12 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-view-list"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Kelas Praktikum</b>
                            </div>
                    </a>
            </div>
        </div>  

            <div class="col-sm-12">
                    <div class="white-box row">
                        <h3 class="box-title m-b-0">PENDAFTARAN ASLAB</h3>
                    <br>
                    <?php if ($ada==1) { ?>
                        <a href="<?php echo base_url();?>Rekrut/view_rekrut">
                                <div class="col-lg-12 col-xs-12 text-center p-t-20 p-b-20">
                                        <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-account-plus"></i> </button> <br><br>
                                        <b class="text-dark">Daftar Aslab</b>
                                </div>
                        </a>
                    <?php } else{ ?>
                        <a href="<?php echo base_url();?>Rekrut">
                                <div class="col-lg-12 col-xs-12 text-center p-t-20 p-b-20">
                                        <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-account-plus"></i> </button> <br><br>
                                        <b class="text-dark">Daftar Aslab</b>
                                </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
       

<?php endif; ?>
<!---------------------------------->

<?php
$this->load->view('dashboard/rightside');
?>



<?php
$this->load->view('dashboard/footer');
?>