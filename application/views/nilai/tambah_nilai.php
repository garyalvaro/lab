<?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');

$id_kelas = $this->uri->segment(3);
?>

<!-- TITLE -->
<div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $subtitle; ?></h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
        </div>
</div>


<!-- CONTENT -->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Tambah Nilai</h3>
            <p class="text-muted m-b-30"> </p>
            
            <div class="table-responsive">
                    <?php //echo form_open('Nilai/add/'.$id_kelas); ?>
                        <table id="table_id" class="table table-striped table-bordered" >
                                <thead>
                                <tr class="thead-dark">
                                        <th>No.</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach($detail as $data){?>
                                <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data->nim; ?></td>
                                        <td><?php echo $data->nama; ?></td>
                                        <td>
                                                <input name="nim" hidden readonly value="<?php echo $data->nim; ?>">
                                                <input type="number" name="nilai" id="nilai_<?php echo $data->nim; ?>" class="form-control" min="0" max="100" autocomplete="off" value="<?php echo $data->nilai; ?>" onChange="tambahNilai(<?php echo $data->nim; ?>)">
                                        </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                        <td colspan="4" class="text-right">
<!--                                                <input type="submit" name="submit" class="btn btn-primary" value="Kirim">-->
                                        </td>
                                </tfoot>
                        </table>
                <?php //echo form_close(); ?>
            </div>
            
        </div>
</div>






<?php
$this->load->view('dashboard/rightside');
?>

<script type="text/javascript">
function tambahNilai(nim) {
        var nilai = $('#nilai_'+nim).val();
        var id_kelas = <?php echo $this->uri->segment(3);?>;
        $.ajax({
                url:'<?php echo base_url();?>Nilai/add/'+id_kelas,
                type:'get',
                data: 'nim='+nim+'&nilai='+nilai,
                success:function(msg){
                        if (msg == 'true') {
                                alert('Berhasil');
                        }else if (msg == 'false') {
                                
                        }
                },
                error:function(){
                        alert('Terjadi kesalahan');
                }
        });
};
</script>


<?php
$this->load->view('dashboard/footer');
?>
