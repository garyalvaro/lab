<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');
if($this->session->flashdata())
{
        if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
        if($this->session->flashdata('add_failed'))
                echo "<span class='add-failed'></span>";
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
                <a href="<?php echo base_url().'Kelas/cetak_nilai/'.$id_kelas;?>" class="btn btn-warning pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" target="_blank"> <span class="glyphicon glyphicon-print"></span> Cetak Nilai</a>
                <a href="<?php echo base_url().'Kelas/absensi/'.$id_kelas;?>" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light" target="_blank"> <span class="glyphicon glyphicon-print"></span> Cetak Absensi</a>
        </div>
</div>

<!-- CONTENT -->
<div class="col-sm-12">
        <div class="white-box">
            <div class="row">            
                <div class="col-sm-10">
                    <h3 class="box-title m-b-0">KELAS <?php foreach($detail as $data){ echo $data->nama_kelas; break; } ?> </h3>
                </div>
                <div class="col-sm-2">
                    <a href="<?php echo base_url();?>Kelas/mahasiswa/<?= $data->id_kelas; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Mahasiswa</a>
                </div>
            </div>
            
            
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

<script>
    $('#table_id').DataTable({
        dom: 'Bfrtip',
        "order": [[ 1, "asc" ]],
        buttons: [
            'copy', 'csv', 'excel', 'pdf'
        ]
    });
</script>

<?php
$this->load->view('dashboard/footer');
?>
