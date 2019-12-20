<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="<?php echo base_url();?>Dashboard" class="waves-effect"><img src="https://portal.usu.ac.id/photos/<?php echo $this->session->userdata('nim'); ?>.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> <?php echo $this->session->userdata('nama'); ?></span>
                        </a>
                    </li>
                    <li class="devider"></li>
                    
                    <!--BPH--------------------------->
                    <?php if($this->session->userdata('level')==2): ?>
                    <li><a href="#" class="waves-effect"><i class="fa fa-calendar fa-fw"></i> <span class="hide-menu">Penjadwalan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Jadwal"><i class="fa fa-calendar-o fa-fw"></i><span class="hide-menu">Lihat Jadwal</span></a></li>
                            <li><a href="<?php echo base_url();?>Jadwal/create"><i class="mdi mdi-calendar-plus fa-fw"></i><span class="hide-menu">Buat Jadwal</span></a></li>
                            <li><a href="<?php echo base_url();?>Jadwal/ruang"><i class="fa fa-building-o fa-fw"></i><span class="hide-menu">Daftar Ruangan</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>    
                            
                    <li><a href="#" class="waves-effect"><i class="fa fa-building fa-fw"></i> <span class="hide-menu">Kelas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Kelas/"><i class="mdi mdi-view-list fa-fw"></i><span class="hide-menu">Daftar Kelas</span></a></li>
                            <li><a href="<?php echo base_url();?>Kelas/create/"><i class="mdi mdi-playlist-plus fa-fw"></i><span class="hide-menu">Tambah Kelas</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-account-multiple fa-fw"></i> <span class="hide-menu">Aslab<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Rekrut/view_rekrut"><i class="mdi mdi-account-multiple-plus fa-fw"></i><span class="hide-menu">Perekrutan Aslab</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    
                    <li><a href="#" class="waves-effect"><i class="fa fa-users fa-fw"></i> <span class="hide-menu">User<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Bph"><i class="mdi mdi-account-card-details fa-fw"></i><span class="hide-menu">Daftar Pengguna</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    
                    
                 <!--ASLAB--------------------------->
                    <?php elseif($this->session->userdata('level')==1): ?>
                    <li><a href="#" class="waves-effect"><i class="fa fa-calendar fa-fw"></i> <span class="hide-menu">Penjadwalan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Jadwal"><i class="fa fa-calendar-o fa-fw"></i><span class="hide-menu">Lihat Jadwal</span></a></li>
                            <li><a href="<?php echo base_url();?>Jadwal/create"><i class="mdi mdi-calendar-plus fa-fw"></i><span class="hide-menu">Buat Jadwal</span></a></li>
                            <li><a href="<?php echo base_url();?>Jadwal/ruang"><i class="fa fa-building-o fa-fw"></i><span class="hide-menu">Daftar Ruangan</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>    
                            
                    <li><a href="#" class="waves-effect"><i class="fa fa-building fa-fw"></i> <span class="hide-menu">Kelas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Kelas"><i class="mdi mdi-view-list fa-fw"></i><span class="hide-menu">Daftar Kelas Praktikum</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    
                    
                <!--MHS--------------------------->
                    <?php elseif($this->session->userdata('level')==0): ?>
                    <li><a href="#" class="waves-effect"><i class="fa fa-calendar fa-fw"></i> <span class="hide-menu">Penjadwalan<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Jadwal"><i class="fa fa-calendar-o fa-fw"></i><span class="hide-menu">Lihat Jadwal</span></a></li>
                            <li><a href="<?php echo base_url();?>Jadwal/ruang"><i class="fa fa-building-o fa-fw"></i><span class="hide-menu">Daftar Ruangan</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>    
                            
                    <li><a href="#" class="waves-effect"><i class="fa fa-building fa-fw"></i> <span class="hide-menu">Kelas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>Kelas"><i class="mdi mdi-view-list fa-fw"></i><span class="hide-menu">Daftar Kelas</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>    
                    <li><a href="<?php echo base_url();?>Rekrut"><i class="mdi mdi-account-plus fa-fw"></i><span class="hide-menu">Pendaftaran Aslab</span></a></li>
                    <li class="devider"></li>
                
                <!--MHS--------------------------->
                    <?php endif; ?>
                
                    
                <!--logout--------->
                    <li><a href="<?php echo base_url(); ?>lab/logout" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        
        
<!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">