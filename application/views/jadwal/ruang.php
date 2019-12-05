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

<!--Daftar Ruangan-->
<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">DAFTAR RUANG</h3>
            <p class="text-muted m-b-30">Daftar semua ruangan laboratorium Fasilkom-TI USU.</p>
                
                <div class="table-responsive">
                        <table class="table table-striped table-hover">
                                <thead>
                                        <tr>
                                                <th>Kode Ruangan</th>
                                                <th>Ruang</th>
                                                <th>Keterangan</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php foreach($ruang as $key): ?>
                                        <tr>
                                                <td><?= $key->id_ruang;?></td>
                                                <td><?= $key->nama_ruang;?></td>
                                                <td><?= $key->keterangan;?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>
                </div>
                        
        </div>
</div>


<?php
$this->load->view('dashboard/rightside');
$this->load->view('dashboard/footer');
?>