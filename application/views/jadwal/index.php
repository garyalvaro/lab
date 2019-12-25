<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('add_jadwal_success'))
                echo "<span class='add_jadwal_success'></span>";
        if($this->session->flashdata('add_jadwal_failed'))
                echo "<span class='add_jadwal_failed'></span>";
}

?>

<!-- AutoRefresh -->
<meta http-equiv="refresh" content="30">

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">JADWAL</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <?php if($this->session->userdata('level')!=0):?>
                <a href="<?php echo base_url();?>Jadwal/create" class="btn btn-primary pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="glyphicon glyphicon-plus"></span> Tambah Jadwal</a>
                <?php endif; ?>
        </div>
</div>

<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">JADWAL</h3>
            <div class="text-muted ">
                Jadwal Praktikum Semester Ganjil 2019/2020<br><br>
            </div>
            <table>
                <tr>
                    <td width="50px;">IK1</td>
                    <td>: Lab. Pemrograman 1</td>
                    <td width="100px"></td>
                    <td width="50px;">TI1</td>
                    <td>: Lab. Jaringan 1</td>
                </tr>
                <tr>
                    <td width="50px;">IK2</td>
                    <td>: Lab. Pemrograman 2</td>
                    <td width="100px"></td>
                    <td width="50px;">TI2</td>
                    <td>: Lab. Jaringan 2</td>
                </tr>
                <tr>
                    <td width="50px;">IK3</td>
                    <td>: Lab. Pemrograman 3</td>
                    <td width="100px"></td>
                    <td width="50px;">TI3</td>
                    <td>: Lab. Database</td>
                </tr>
                <tr>
                    <td width="50px;">IK3</td>
                    <td>: Lab. Pemrograman 4</td>
                    <td width="100px"></td>
                    <td width="50px;">TI3</td>
                    <td>: Lab. Multimedia</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <div class="table-responsive">

                        <table class="table table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th></th>
                                        <th>SENIN</th>
                                        <th>SELASA</th>
                                        <th>RABU</th>
                                        <th>KAMIS</th>
                                        <th>JUMAT</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <th>08.00 - 09.40</th>
                                        <?php foreach($jdwl as $data){if($data->id_waktu % 5 == 1){  ?>
                                                <td class="p-l-20">
                                                        <?php foreach($ruangkelas as $key){
                                                                if($key->id_waktu == $data->id_waktu)
                                                                {
                                                                        echo $key->id_ruang ." : ". $key->nama_kelas. "<br>";
                                                                }
                                                        }?>
                                                </td>
                                        <?php }} ?>
                                </tr>
                                <tr>
                                        <th>09.40 - 11.20</th>
                                        <?php foreach($jdwl as $data){if($data->id_waktu % 5 == 2){  ?>
                                                <td class="p-l-20">
                                                        <?php foreach($ruangkelas as $key){
                                                                if($key->id_waktu == $data->id_waktu)
                                                                {
                                                                        echo $key->id_ruang ." : ". $key->nama_kelas. "<br>";
                                                                }
                                                        }?>
                                                </td>
                                        <?php }} ?>
                                </tr>
                                <tr>
                                        <th>11.20 - 13.00</th>
                                        <?php foreach($jdwl as $data){if($data->id_waktu % 5 == 3){  ?>
                                                <td class="p-l-20">
                                                        <?php foreach($ruangkelas as $key){
                                                                if($key->id_waktu == $data->id_waktu)
                                                                {
                                                                        echo $key->id_ruang ." : ". $key->nama_kelas. "<br>";
                                                                }
                                                        }?>
                                                </td>
                                        <?php }} ?>
                                </tr>
                                <tr>
                                        <th>13.00 - 14.40</th>
                                        <?php foreach($jdwl as $data){ if($data->id_waktu % 5 == 4){  ?>
                                                <td class="p-l-20">
                                                        <?php foreach($ruangkelas as $key){
                                                                if($key->id_waktu == $data->id_waktu)
                                                                {
                                                                        echo $key->id_ruang ." : ". $key->nama_kelas. "<br>";
                                                                }
                                                        }?>
                                                </td>
                                        <?php }} ?>
                                </tr>
                                <tr>
                                        <th>14.40 - 16.20</th>
                                        <?php foreach($jdwl as $data){if($data->id_waktu % 5 == 0){  ?>
                                                <td class="p-l-20">
                                                        <?php foreach($ruangkelas as $key){
                                                                if($key->id_waktu == $data->id_waktu)
                                                                {
                                                                        echo $key->id_ruang ." : ". $key->nama_kelas. "<br>";
                                                                }
                                                        }?>
                                                </td>
                                        <?php }} ?>
                                </tr>
                                
                                </tbody>
                        </table>

            </div>
        </div>
</div>


<?php
$this->load->view('dashboard/rightside');
?>


<?php
$this->load->view('dashboard/footer');
?>