<?php
if($this->session->userdata('level') == 0) 
        $level = "Mahasiswa";
elseif($this->session->userdata('level') == 1) 
        $level = "Asisten Lab";
elseif($this->session->userdata('level') == 2) 
        $level = "BPH";

if($this->session->flashdata())
{
        if($this->session->flashdata('login_success'))
                echo "<span class='login-success'></span>";
        if($this->session->flashdata('ganti_level0'))
                echo "<span class='ganti_level0'></span>";
        if($this->session->flashdata('ganti_level1'))
                echo "<span class='ganti_level1'></span>";
        if($this->session->flashdata('ganti_level2'))
                echo "<span class='ganti_level2'></span>";
}

?>

<!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo base_url(); ?>">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url(); ?>assets/ample/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url(); ?>assets/ample/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url(); ?>assets/ample/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url(); ?>assets/ample/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="https://portal.usu.ac.id/photos/<?php echo $this->session->userdata('nim'); ?>.jpg" alt="user-img" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="https://portal.usu.ac.id/photos/<?php echo $this->session->userdata('nim'); ?>.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4><?php echo $this->session->userdata('nama'); ?></h4>
                                        <p class="text-muted">NIM : <?php echo $this->session->userdata('nim'); ?></p>
                                        <p><span class="text-muted">Login as : </span><?php echo $level; ?></p>
                                        <p>
                                                <?php 
                                                  if( $this->session->userdata('level_asli')!=0 ) : 
                                                  echo form_open('lab/gantilevel');
                                                ?>
                                                        <div id="ganti" class="form-inline">
                                                                <select name="level_baru" required class="">
                                                                        <option selected disabled>Ganti Level</option>
                                                                        <option value="0">Mahasiswa</option>
                                                                        <option value="1">Aslab</option>
                                                                        <?php if( $this->session->userdata('level_asli')==2 ) : ?>
                                                                        <option value="2">BPH</option>
                                                                        <?php endif; ?>
                                                                </select>
                                                                <input type="submit" name="submit" value="OK" class="rounded-0">
                                                        </div>
                                                <?php 
                                                   echo form_close(); 
                                                   endif;
                                                ?>
                                        </p>
                                        <br>
                                        <a href="<?php echo base_url(); ?>lab/logout" class="btn btn-rounded btn-danger btn-sm"><i class="fa fa-power-off"></i> &nbsp; Logout</a>
                                     </div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->