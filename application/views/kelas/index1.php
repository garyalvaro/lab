<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">KELAS</h4>
        </div>
</div>

<div class="container row">
<?php //if($this->session->flashdata()):?>
        <div class="popup-alert">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php 
                        echo "ANJIR";
                ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        </div>
<?php //endif; ?>
</div>

<div class="row">
        <div class="col-sm-12">
                <div class="white-box">
                        <div class="row row-in">
                                
                                
                                <div class="col-sm-1 float-right pl-2">
                                        <a href="<?php echo base_url();?>index.php/Kelas/create" class="btn btn-info float-right"><span class="glyphicon glyphicon-plus"></span></a>
                                </div>
                                <br>
                                
                                <div class="white-box">
                                        <h3 class="box-title m-b-0">TABEL KELAS</h3>
                                        <p class="text-muted m-b-20">List Semua Kelas</p>
                                        <div class="table-responsive">
                                        
                                        <table id="table_id" class="table table-striped table-bordered" >
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

<!--JS untuk Tabel-->
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
} );
</script>