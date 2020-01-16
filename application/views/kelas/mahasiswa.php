<?php
//If not logged in, redirect to homepage
if(!$this->session->userdata('logged_in')){
        $this->session->set_flashdata('login_dulu','Mohon Login Dahulu');
        redirect('');
}
?>

<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="17x13" href="<?php echo base_url(); ?>assets/ample/plugins/images/favvicon.png">

    <title><?php echo $title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/ample/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- xeditable css -->
    <link href="<?php echo base_url(); ?>assets/ample/plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <!--alerts CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom_gary.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom_xixil.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/css/colors/megna-dark.css" id="theme" rel="stylesheet">
        
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
<!--
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
-->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
<?php 

$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');


$id_kelas = $this->uri->segment(3);

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4 class="page-title"><?php echo $subtitle;  ?></h4>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                
        </div>
</div>

<!-- CONTENT -->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">KELAS <?php foreach($detail as $data){ echo $data->nama_kelas; break; } ?> </h3>
            <div class="row">
                <div class="col-sm-10">
            <select id="stambuk" class="selectpicker" data-style="form-control" >
                <option value="19A">Stambuk 2019 - KOM A</option>
                <option value="19B">Stambuk 2019 - KOM B</option>
                <option value="19C">Stambuk 2019 - KOM C</option>
                <option value="18A">Stambuk 2018 - KOM A</option>
                <option value="18B">Stambuk 2018 - KOM B</option>
                <option value="18C">Stambuk 2018 - KOM C</option>
                <option value="17A">Stambuk 2017 - KOM A</option>
                <option value="17B">Stambuk 2017 - KOM B</option>
                <option value="17C">Stambuk 2017 - KOM C</option>
                <option value="16A">Stambuk 2016 - KOM A</option>
                <option value="16B">Stambuk 2016 - KOM B</option>
                <option value="16C">Stambuk 2016 - KOM C</option>
            </select> <!-- 
            <p id="result">Total Number of Items Selected = <p>   -->
            
        </div>
            <div class="col-sm-2">
            <form action="<?= base_url(); ?>Kelas/tbhMahasiswa/<?= $id_kelas; ?>" method="post">
            <button type="submit" class="btn btn-block btn-danger"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</button></div></div>
            <p class="text-muted m-b-30"> </p>
            
            <div class="table-responsive" >
                <table class="table table-striped table-bordered" style="" id="table_19A">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==19 && ($data->nim%1000)%3==1) { ?>
                    <tr>
                        <td>
                            <div class="checkbox checkbox-primary" style="margin-top: 0px !important;margin-bottom: 0px !important;">
                                <input id="<?php echo $data->nim; ?>" type="checkbox"  name="nim[]"  value="<?php echo $data->nim; ?>">
                                <label for="<?php echo $data->nim; ?>"><?php echo $data->nim; ?></label>
                            </div>
                        </td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php
                            $kom = ($data->nim%1000)%3;
                            if ($kom==1) 
                                echo "A";
                            else if ($kom==2)
                                echo "B";
                            else
                                echo "C";
                         ?></td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                </table>
                <table id="table_18A" class="table table-striped table-bordered" style="display: none;">
                    <thead>
                    <tr class="thead-dark">

                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==18 && ($data->nim%1000)%3==1) { ?>
                    <tr>
                        <td>
                            <div class="checkbox checkbox-primary" style="margin-top: 0px !important;margin-bottom: 0px !important;">
                                <input id="<?php echo $data->nim; ?>" type="checkbox"  name="nim[]"  value="<?php echo $data->nim; ?>">
                                <label for="<?php echo $data->nim; ?>"><?php echo $data->nim; ?></label>
                            </div>
                        </td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php
                            $kom = ($data->nim%1000)%3;
                            if ($kom==1) 
                                echo "A";
                            else if ($kom==2)
                                echo "B";
                            else
                                echo "C";
                         ?></td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                </table>
                <table id="table_18B" class="table table-striped table-bordered" style="display: none;">
                    <thead>
                    <tr class="thead-dark">

                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==18 && ($data->nim%1000)%3==2) { ?>
                    <tr>
                        <td>
                            <div class="checkbox checkbox-primary" style="margin-top: 0px !important;margin-bottom: 0px !important;">
                                <input id="<?php echo $data->nim; ?>" type="checkbox"  name="nim[]"  value="<?php echo $data->nim; ?>">
                                <label for="<?php echo $data->nim; ?>"><?php echo $data->nim; ?></label>
                            </div>
                        </td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php
                            $kom = ($data->nim%1000)%3;
                            if ($kom==1) 
                                echo "A";
                            else if ($kom==2)
                                echo "B";
                            else
                                echo "C";
                         ?></td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                </table>
                <table id="table_18C" class="table table-striped table-bordered" style="display: none;">
                    <thead>
                    <tr class="thead-dark">

                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==18 && ($data->nim%1000)%3==0) { ?>
                    <tr>
                        <td>
                            <div class="checkbox checkbox-primary" style="margin-top: 0px !important;margin-bottom: 0px !important;">
                                <input id="<?php echo $data->nim; ?>" type="checkbox"  name="nim[]"  value="<?php echo $data->nim; ?>">
                                <label for="<?php echo $data->nim; ?>"><?php echo $data->nim; ?></label>
                            </div>
                        </td>
                        <td><?php echo $data->nama; ?></td>
                        <td><?php
                            $kom = ($data->nim%1000)%3;
                            if ($kom==1) 
                                echo "A";
                            else if ($kom==2)
                                echo "B";
                            else
                                echo "C";
                         ?></td>
                    </tr>
                    <?php } } ?>
                    </tbody>
                </table>
            </div>
        </form>
        </div>
</div>

<?php
$this->load->view('dashboard/rightside');
?>

<!-- <script>
            showChecked();
            function showChecked(){
              document.getElementById("result").textContent = "Total Number of Items Selected = " + document.querySelectorAll("input:checked").length;
            }
            document.querySelectorAll("input[name=nim[]]").forEach(i=>{
             i.onclick = function(){
              showChecked();
             }
            });
            </script> -->
 <script type="text/javascript">
    $("#stambuk").change(function(){
        if($(this).val() == '18A'){
            $("#table_18A").show();
        }
        else{
            $("#table_19A").hide();
            $("#table_19B").hide();
            $("#table_19C").hide();
            $("#table_18A").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
</script> 

<?php
$this->load->view('dashboard/footer');
?>
