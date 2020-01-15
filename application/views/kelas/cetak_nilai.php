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
                        <th>Dosen Penanggung Jawab</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->nama_dosen; ?></td>
                </tr>
                <tr>
                        <th>Tahun Ajaran</th>
                        <td><span class="m-l-10 m-r-10">:</span></td>
                        <td><?php echo $data->tahun_ajaran; ?></td>
                </tr>
        </table>
<?php break; endforeach; ?>

<br><br>

<table class="table table-bordered">
        <tr>
                <td width="10%" class="text-center"><b>No.</b></td>
                <td width="20%" class="text-center"><b>NIM</b></td>
                <td width="40%" class="text-center"><b>Nama</b></td>
                <td width="" class="text-center"><b>Nilai</b></td>
                <td width="" class="text-center"><b>Huruf</b></td>
        </tr>
        <?php $no=1; foreach($detail as $data){?>
        <tr>
                <td class='tdsm text-center'><?php echo $no++; ?></td>
                <td class='tdsm'><?php echo $data->nim; ?></td>
                <td class='tdsm' style="max-width: 0; overflow: hidden; text-overflow: clip; white-space: nowrap;"><?php echo $data->nama; ?></td>
                <td class='tdsm text-center'><?php echo $data->nilai; ?></td>
                <td class='tdsm text-center'><?php echo nilaiHuruf($data->nilai) ?></td>
        </tr>
        <?php } ?>
</table>

<br>
<br>

<p>
        Keterangan Nilai : <br>
        A = 80-100 <br>
        B+ = 75-79 <br>
        B = 70-74 <br>
        C+ = 65-69 <br>
        C = 60-64 <br>
        D = 50-59 <br>
        E = 0-49 <br>   
</p>

<br>
<br>

<?php foreach($kelas as $data): ?>
<table width="100%" class="text-center">
<tr>
        <td width="50%">
        <br><br>
        <b>Dosen Penanggung Jawab, </b>
        <br><br><br><br><br>
        ( <span style="border-bottom: 1px dotted"><?php echo $data->nama_dosen; ?></span> )
        <br>
        NIP : <?php echo $data->nip; ?> 
        </td>
        
        <td width="50%">
                <b>Medan, <?php echo date('d F Y'); ?></b><br><br>
                <b>Asisten Lab, </b>
                <br><br><br><br><br>
                ( <span style="border-bottom: 1px dotted"><?php echo $data->nama_aslab; ?></span> )
                <br>
                NIM : <?php echo $data->nim; ?>        
        </td>
</tr>
</table>
<?php break; endforeach; ?>




<?php
function nilaiHuruf($nilai)
{
        if ($nilai == NULL)
                $huruf="-"; 
        elseif($nilai >= 80 && $nilai <= 100)
                $huruf = "A";
        elseif($nilai >= 75 && $nilai < 80)
                $huruf = "B+";
        elseif($nilai >= 70 && $nilai < 75)
                $huruf = "B";
        elseif($nilai >= 65 && $nilai < 70)
                $huruf = "C+";
        elseif($nilai >= 60 && $nilai < 65)
                $huruf = "C";
        elseif($nilai >= 50 && $nilai < 60)
                $huruf = "D";
        elseif($nilai >= 0 && $nilai < 50)
                $huruf = "E";
        else
                $huruf = "-";
        return $huruf;
}
?>

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