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
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/ample/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom_gary.css" rel="stylesheet">
    
    <style>
    .tdsm{
            padding: 5px 8px !important;
    }
    </style>
</head>

<body class="bg-white">

<center><img src="<?php echo base_url(); ?>assets/luis/img/logo_LabTI_black.png" alt="" width="40%"></center>

<?php foreach($kelas as $data): ?>
        <h3><center><?php echo $subtitle; ?></center></h3>
        <br>
        <table>
                <tr>
                        <th>Praktikum Mata Kuliah</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->nama_kelas; ?></td>
                </tr>
                <tr>
                        <th>Asisten Lab</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->nama_aslab; ?></td>
                </tr>
                <tr>
                        <th>Jadwal Praktikum</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->nama_waktu; ?></td>
                </tr>
                <tr>
                        <th>Ruangan Praktikum</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->nama_ruang; ?></td>
                </tr>
        </table>
<?php break; endforeach; ?>

<br><br>

<table class="table table-bordered" style="font-size: 11px;">
        <tr>
                <td rowspan="2" width="3%" class="text-center align-middle"><b>No.</b></td>
                <td rowspan="2" width="8%" class="text-center align-middle"><b>NIM</b></td>
                <td rowspan="2" width="25%" class="text-center align-middle"><b>Nama</b></td>
                <td colspan="12" width="" class="text-center align-middle tdsm"><b>Tanggal</b></td>
        </tr>
        <tr>
                <?php for($i=0; $i<12; $i++){ echo "<td height='8px'></td>"; } ?>
        </tr>
        <?php $no=1; foreach($detail as $data){?>
        <tr>
                <td class='tdsm'><?php echo $no++; ?></td>
                <td class='tdsm'><?php echo $data->nim; ?></td>
                <td class='tdsm' style="max-width: 0; overflow: hidden; text-overflow: clip; white-space: nowrap;"><?php echo $data->nama; ?></td>
                <?php for($i=0; $i<12; $i++){ echo "<td class='tdsm'></td>"; } ?>
        </tr>
        <?php } ?>
</table>

<br>
<br>
<br>
<br>

<?php foreach($kelas as $data): ?>
<table width="100%" class="text-center">
<tr>
        <td width="50%">
        <b>Dosen Penanggung Jawab, </b>
        <br><br><br><br><br>
        (.....................................................................)
        <br>
        NIP : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        </td>
        
        <td width="50%">
                <b>Asisten Lab, </b>
                <br><br><br><br><br>
                ( <span style="border-bottom: 1px dotted"><?php echo $data->nama_aslab; ?></span> )
                <br>
                NIM : <?php echo $data->nim; ?>        
        </td>
</tr>
</table>
<?php break; endforeach; ?>


<br>
<br>
<br>
<br>


<!-- PRINT PAGE -->
<script>
window.print();
</script>


<!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ample/js/custom.min.js"></script>

</body>
</html>