<h1>Tambah Kelas</h1>


<!--Form Tambah Kelas-->
<div class="row font-Monts_Md mx-0">
<div class="col-sm-12 bg-light py-5" id="menu">
        <div class="container fluid">
                <div class="col-sm-12">
                        <?php echo form_open('Kelas/create'); ?>
                                <div class="form-group">
                                        Nama Kelas
                                        <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" required>
                                </div>
                                
                                <div class="form-group">
                                        Kom
                                        <input type="text" name="kom" class="form-control" placeholder="Masukkan Kom" required>
                                </div>

                                
                                <div class="form-group">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
                                </div>
                                <?php echo form_close(); ?>
                                
                </div>
        </div>
</div>
</div>



