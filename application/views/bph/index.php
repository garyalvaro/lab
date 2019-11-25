<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('login_success'))
                echo "<span id='login-success'></span>";
}

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <h4 class="page-title"><?php echo $subtitle;  ?></h4>
        </div>
        <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        </div>
</div>


<?php
$this->load->view('dashboard/rightside');
?>


<?php
$this->load->view('dashboard/footer');
?>