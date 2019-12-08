<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

if($this->session->flashdata())
{
        if($this->session->flashdata('delete_success'))
                echo "<span class='delete_success'></span>";
        elseif($this->session->flashdata('edit_success'))
                echo "<span class='edit_success'></span>";
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

<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">PENGGUNA</h3>
            <p class="text-muted m-b-30">Data pengguna dalam LaboratoriumTI</p>
            
            <table id="table_id" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Level</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                            </tr>
                    </thead>
                    <tbody>
                            <?php foreach($user as $key):?>
                            <tr>
                                    <td><?= $key->nim; ?></td>
                                    <td><?= $key->nama; ?></td>
                                    <td>
                                            <?php 
                                                if($key->level == 0)
                                                        echo '<span class="label label-success">Mahasiswa</span>';
                                                elseif($key->level == 1)
                                                        echo '<span class="label label-primary">Aslab</span>';
                                                elseif($key->level == 2)
                                                        echo '<span class="label label-danger">BPH</span>';
                                            ?>
                                    </td>
                                    <td><?= $key->email; ?></td>
                                   <td><?= $key->pass; ?></td>
                                    <td>
                                            <a href="<?php echo base_url();?>Bph/edit/<?= $key->nim; ?>" class="text-primary"><span class="fa fa-pencil m-r-10"></span></a>
                                            <a href="<?php echo base_url();?>/Bph/delete/<?= $key->nim; ?>" class="text-danger" onClick="return confirm('Anda yakin ingin menghapus?');"><span class="fa fa-trash"></span></a>
                                    </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
            </table>
            
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

<?php
$this->load->view('dashboard/footer');
?>