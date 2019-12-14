 <?php 
$this->load->view('dashboard/header');
$this->load->view('dashboard/navbar');
$this->load->view('dashboard/leftside');
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

<!--Form Tambah Jadwal-->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">TAMBAH JADWAL</h3>
            <p class="text-muted m-b-30">Untuk menambah jadwal praktikum baru.</p>

                        <?php echo form_open('Jadwal/create'); ?>
                                <div class="form-group">
                                        Kelas
                                        <select name="id_kelas" class="form-control" required>
                                                <option disabled selected>--Pilih Kelas--</option>
                                                <?php foreach($kelas as $key):?>
                                                <option value="<?= $key->id_kelas;?>"><?= $key->nama_kelas;?></option>
                                                <?php endforeach;?>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        Waktu
                                        <select name="id_waktu" id="id_waktu" class="form-control" required>
                                                <option disabled selected>--Pilih Waktu--</option>
                                                <?php foreach($waktu as $key):?>
                                                <option value="<?= $key->id_waktu;?>"><?= $key->nama_waktu;?></option>
                                                <?php endforeach;?>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        Ruang
                                        <select name="id_ruang" id="id_ruang" class="form-control" required>
                                                <option disabled selected>--Pilih Ruang--</option>
                                                <?php foreach($ruang as $key):?>
                                                <option value="<?= $key->id_ruang;?>"><?= $key->nama_ruang;?></option>
                                                <?php endforeach;?>
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        <font color="" id="notif"></font>
                                </div>
                                
                                <div class="form-group">
                                        <input type="submit" name="submit" id="daftar" value="Simpan" class="btn btn-primary">
                                        <a href="<?php echo base_url();?>Jadwal" class="btn btn-outline btn-default">Kembali </a>
                                </div>
                        <?php echo form_close(); ?>
                        
        </div>
</div>

<script type="text/javascript">
$( document ).change(function() {
        var id_waktu = $('#id_waktu').val();
        var id_ruang = $('#id_ruang').val();
        $.ajax({
                url:'<?php echo base_url('Jadwal/cekWaktuRuang/');?>',
                type:'get',
                data:'id_waktu='+id_waktu+'&id_ruang='+id_ruang,
                success:function(msg){
                        if (msg == 'true') {
                                $("#notif").text('Jadwal sudah ada! Silakan cari jadwal lain.');
                                $("#notif").prop('color','red');
                                $("#daftar").attr('disabled',true);
                        }else if (msg == 'false') {
                                $("#notif").text('Jadwal dapat digunakan.');
                                $("#notif").prop('color','green');
                                $("#daftar").attr('disabled',false);
                        }
                },
                error:function(){
                        alert('Terjadi kesalahan');
                }
        });
});
</script>


<?php
$this->load->view('dashboard/rightside');
$this->load->view('dashboard/footer');
?>