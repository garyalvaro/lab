<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('login_success'))
                echo "<span id='login-success'></span>";
}

$id_kelas = $this->uri->segment(3);

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h4 class="page-title"><?php echo $subtitle;  ?></h4>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <a href="<?php echo base_url().'Nilai/add/'.$id_kelas;?>" class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="glyphicon glyphicon-pencil"></span> Edit Nilai</a>
                <a href="<?php echo base_url().'Kelas/absensi/'.$id_kelas;?>" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" target="_blank"> <span class="glyphicon glyphicon-print"></span> Cetak Absensi</a>
        </div>
</div>

<!-- CONTENT -->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">KELAS <?php foreach($detail as $data){ echo $data->nama_kelas; break; } ?> </h3>
            <p class="text-muted m-b-30"> </p>
            
            <div class="table-responsive">
                        <table id="table_id" class="table table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th>No.</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Huruf</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach($detail as $data){?>
                                <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data->nim; ?></td>
                                        <td><?php echo $data->nama; ?></td>
                                        <td><?php echo $data->nilai; ?></td>
                                        <td><?php echo nilaiHuruf($data->nilai) ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                        </table>

            </div>
        </div>
</div>

<?php
$this->load->view('dashboard/rightside');
?>

<?php
function nilaiHuruf($nilai)
{
        if($nilai >= 80 && $nilai <= 100)
                $huruf = "A";
        elseif($nilai >= 75 && $nilai < 80)
                $huruf = "B+";
        elseif($nilai >= 65 && $nilai < 75)
                $huruf = "B";
        elseif($nilai >= 55 && $nilai < 65)
                $huruf = "C+";
        elseif($nilai >= 45 && $nilai < 55)
                $huruf = "C";
        elseif($nilai >= 0 && $nilai < 45)
                $huruf = "E";
        else
                $huruf = "-";
        return $huruf;
}
?>

<script>
    $('#table_id').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>

<?php
$this->load->view('dashboard/footer');
?>
