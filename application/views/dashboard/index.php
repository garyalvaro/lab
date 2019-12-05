<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
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
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-calendar-plus text-lg"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-edit"></i> </button> <br><br>
                                    <b class="text-dark">Ganti Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
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
                    <a href="#">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-view-list"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Kelas Praktikum</b>
                            </div>
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-playlist-plus"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Kelas</b>
                            </div>
                    </a>
            </div>
        </div>
        
        <div class="col-sm-12">
                <div class="white-box row">
                    <h3 class="box-title m-b-0">ASLAB</h3>
                <br>
                    <a href="#">
                            <div class="col-lg-6 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-account-card-details"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Aslab</b>
                            </div>
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
        <!--            <p class="text-muted m-b-30">Daftar semua kelas praktikum</p>-->
                <br>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-calendar-plus text-lg"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-message-draw"></i> </button> <br><br>
                                    <b class="text-dark">Buat Pengumuman</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
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
                    <a href="#">
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
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa fa-calendar-o"></i> </button> <br><br>
                                    <b class="text-dark">Lihat Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-calendar-plus text-lg"></i> </button> <br><br>
                                    <b class="text-dark">Tambah Jadwal</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-message-draw"></i> </button> <br><br>
                                    <b class="text-dark">Buat Pengumuman</b>
                            </div>
                    </a>
                    <a href="#">
                            <div class="col-lg-3 col-xs-6 text-center p-t-20 p-b-20">
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
                    <a href="#">
                            <div class="col-lg-12 col-xs-12 text-center p-t-20 p-b-20">
                                    <button type="button" class="btn btn-info btn-circle btn-xl"><i class="fa mdi mdi-view-list"></i> </button> <br><br>
                                    <b class="text-dark">Daftar Kelas Praktikum</b>
                            </div>
                    </a>
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