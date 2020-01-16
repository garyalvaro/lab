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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

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
            <div class="row mb-1">
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
                    </select>             
                </div>
                <div class="col-sm-2">
                    <form action="<?= base_url(); ?>Kelas/tbhMahasiswa/<?= $id_kelas; ?>" method="post">
                    <button type="submit" class="btn btn-block btn-danger "><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah</button>
                </div>
            </div>
            
            <div class="table-responsive" >
                <table class="table table-striped table-bordered" style="display: none;" id="table_17A">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==17 && ($data->nim%1000)%3==1) { ?>
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
                <div class="table-responsive" >
                <table class="table table-striped table-bordered" style="display: none;" id="table_17B">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==17 && ($data->nim%1000)%3==2) { ?>
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
                <div class="table-responsive" >
                <table class="table table-striped table-bordered" style="display: none;" id="table_17C">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==17 && ($data->nim%1000)%3==0) { ?>
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
                <table class="table table-striped table-bordered"  id="table_19B" style="display: none;">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==19 && ($data->nim%1000)%3==2) { ?>
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
                <table class="table table-striped table-bordered"  id="table_19C" style="display: none;">
                    <thead>
                    <tr class="thead-dark">
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>KOM</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $data){?>
                    <?php if (intval($data->nim/10000000)==19 && ($data->nim%1000)%3==0) { ?>
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

<script type="text/javascript">
    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
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
            $("#table_19A").hide();
            $("#table_19B").hide();
            $("#table_19C").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '18B'){
            $("#table_18B").show();
            $("#table_18A").hide();
            $("#table_19B").hide();
            $("#table_19C").hide();
            $("#table_19A").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '18C'){
            $("#table_18C").show();
            $("#table_18A").hide();
            $("#table_19B").hide();
            $("#table_19C").hide();
            $("#table_19A").hide();
            $("#table_18B").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '19A'){
            $("#table_19A").show();
            $("#table_18A").hide();
            $("#table_19B").hide();
            $("#table_19C").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '19B'){
            $("#table_19B").show();
            $("#table_18A").hide();
            $("#table_19A").hide();
            $("#table_19C").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '19C'){
            $("#table_19C").show();
            $("#table_18A").hide();
            $("#table_19A").hide();
            $("#table_19B").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_17A").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
        }
        else if($(this).val() == '17A'){
            $("#table_17A").show();
            $("#table_18A").hide();
            $("#table_19A").hide();
            $("#table_19B").hide();
            $("#table_18B").hide();
            $("#table_18C").hide();
            $("#table_19C").hide();
            $("#table_17B").hide();
            $("#table_17C").hide();
            $("#table_16A").hide();
            $("#table_16B").hide();
            $("#table_16C").hide();
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
    });
</script> 
<!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/ample/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/js/toastr.js"></script>
    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/ample/js/jasny-bootstrap.js"></script>
    <!-- start - This is for export functionality only -->
<!--
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
-->
    <!-- end - This is for export functionality only -->
    
    
    <script>
//    $(document).ready(function() {
//        $('#myTable').DataTable();
//        $(document).ready(function() {
//            var table = $('#example').DataTable({
//                "columnDefs": [{
//                    "visible": false,
//                    "targets": 2
//                }],
//                "order": [
//                    [2, 'asc']
//                ],
//                "displayLength": 25,
//                "drawCallback": function(settings) {
//                    var api = this.api();
//                    var rows = api.rows({
//                        page: 'current'
//                    }).nodes();
//                    var last = null;
//                    api.column(2, {
//                        page: 'current'
//                    }).data().each(function(group, i) {
//                        if (last !== group) {
//                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
//                            last = group;
//                        }
//                    });
//                }
//            });
//            // Order by the grouping
//            $('#example tbody').on('click', 'tr.group', function() {
//                var currentOrder = table.order()[0];
//                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
//                    table.order([2, 'desc']).draw();
//                } else {
//                    table.order([2, 'asc']).draw();
//                }
//            });
//        });
//    });
//    $('#example23').DataTable({
//        dom: 'Bfrtip',
//        buttons: [
//            'copy', 'csv', 'excel', 'pdf', 'print'
//        ]
//    });
    </script>
    <!--Style Switcher -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<script>
if ('serviceWorker' in navigator) {    console.log("Will the service worker register?");    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){        console.log("Yes, it did.");     }).catch(function(err) {        console.log("No it didn't. This happened:", err)    });
 }
</script>

</html>

