<!--Stok Makanan-->
<div class="row text-center font-Monts_Md mx-0">
<div class="col-sm-12 bg-light py-5" id="menu">
        <div class="container fluid">
                <div class="col-sm-12">
                        <br>
                                <div class="col-sm-10 float-left mb-4">
                                  <?php if($this->session->flashdata()):?>
                                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <?php 
                                                //Kalau tabel kelas berhasil dibuat akan menampilkan keterangan
                                                if($this->session->flashdata('kelas_create')): 
                                                        echo $this->session->flashdata('kelas_create');
                                                endif;
                                        ?>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php endif; ?>
                                </div>

                                <div class="col-sm-2 float-left mb-4">
                                        <a href="<?php echo base_url();?>index.php/Kelas/create" class="btn btn-info float-right"><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                
                                <table class="table" id="table_id">
                                        <thead>
                                        <tr class="thead-dark">
                                                <th>ID Kelas</th>
                                                <th>Nama Kelas</th>
                                                <th>Aslab</th>
                                                <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($kelas as $data){?>
                                        <tr>
                                                <td><?php echo $data->id_kelas; ?></td>
                                                <td><?php echo $data->nama_kelas; ?></td>
                                                <td>-----</td>
                                                <td>
<!--
                                                        <a href="<?php echo base_url();?>index.php/makanan/edit/<?= $data->id_kelas; ?>" class="btn btn-primary pull-right" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="<?php echo base_url();?>index.php/makanan/delete/<?= $data->id_kelas; ?>" class="btn btn-danger pull-right" class="btn btn-success" onClick="return confirm('Apakah Anda yakin ingin menghapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
-->
                                                </td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                </table>
                                	
                </div>
        </div>
</div>
</div>


<!--JS untuk Alert TimeOut-->
<script>
window.setTimeout(function () {
    $(".alert-success").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 5000);
</script>

<!--JS untuk Tabel-->
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
} );
</script>