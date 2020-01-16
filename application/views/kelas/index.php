<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->userdata('level')==0)
        redirect('Dashboard');

if($this->session->flashdata())
{
        if($this->session->flashdata('add_success'))
                echo "<span class='add-success'></span>";
        if($this->session->flashdata('add_failed'))
                echo "<span class='add-failed'></span>";
}

?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">KELAS</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                <?php if($this->session->userdata('level')==2):?>
                <a href="<?php echo base_url();?>Kelas/create" class="btn btn-info pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> <span class="glyphicon glyphicon-plus"></span> Tambah Kelas</a>
                <?php endif; ?>
        </div>
</div>

<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">KELAS</h3>
            <p class="text-muted m-b-30">Daftar semua kelas praktikum</p>
            <div class="table-responsive">

                        <table id="table_id" class="table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th>No.</th>
                                        <th>Nama Kelas</th>
                                        <th>Nama Aslab</th>
                                        <th>Kode Enroll</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach($kelas as $data):?>
                                <tr>
                                        <td class="p-l-20"><?php echo $no++; ?></td>
                                        <td class="p-l-20"><?php echo $data->nama_kelas; ?></td>
                                        <td class="p-l-20"><?php echo $data->nama_aslab; ?></td>
                                        <td class="p-l-20"><?php echo $data->kode_enroll; ?></td>
                                        <td class="p-l-20"><?php echo $data->tahun_ajaran; ?></td>
                                        <td class="p-l-20">
                                                <a href="<?php echo base_url();?>Kelas/mahasiswa/<?= $data->id_kelas; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-cog"></span></a>
                                                <a href="<?php echo base_url();?>Kelas/view/<?= $data->id_kelas; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></a>
<!--                                                <a href="<?php echo base_url();?>Kelas/delete/<?= $data->id_kelas; ?>" onClick="return confirm('Apakah yakin ingin menghapus kelas <?php echo $data->nama_kelas; ?>?')"  class="btn btn-danger"><span class="fa fa-trash"></span></a>-->
                                                <button type="button" onClick="deleteData(<?= $data->id_kelas; ?>,'<?= $data->nama_kelas; ?>')"  class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                        </td>
                                </tr>
                                <?php endforeach; ?>
                                </tbody>
                        </table>

            </div>
        </div>
</div>


<?php
$this->load->view('dashboard/rightside');
?>

<!--JS untuk Tabel-->
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
} );
</script>

<!--SweetAlert-->
<script>
function deleteData(id_kelas,nama_kelas){
        swal({   
            title: 'Apakah yakin ingin menghapus Kelas '+nama_kelas+'? ',
            text: 'Data yang sudah dihapus tidak dapat dikembalikan lagi.',
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Hapus",   
            closeOnConfirm: false 
        }, function(){
                $.ajax({
                        url:"<?php echo base_url();?>Kelas/delete",
                        type: 'GET',
                        data: 'id_kelas='+id_kelas,
                        success:function(){
                                swal("Berhasil Dihapus!", "Kelas "+nama_kelas+" berhasil dihapus.", "success"); 
                                setInterval(function(){location.reload()}, 2500);
                        },
                        error:function(){
                                alert('Ada yang error');
                        }
                });
                //end ajax
        });
}
//endfunction
</script>





<?php
$this->load->view('dashboard/footer');
?>