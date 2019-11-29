<div class="container">
	<h2 class="mt-3 mb-5">Pendaftaran Asisten Laboratorium Pendidikan</h2>
	<form class="needs-validation" novalidate action="rekrut/daftarAslab/" method="post" enctype="multipart/form-data">
		<div class="row form-group">
			<div class="col-2">
				<label for="nim">NIM</label>
			</div>
			<div class="col-2">
				<div class="form-group mb-2">
					<input type="text" class="form-control" placeholder="NIM" id="nim" name="nim" required>
					<div class="invalid-feedback">
					  	Masukkan NIM yang valid!
					</div>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="sem">Mata kuliah pilihan 1</label>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2 custom-select" id="sem" required>
					<option value="">-Semester-</option>
					<option value="1">1</option>
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="7">7</option>
				</select>
			</div>
			<div class="col-4">
				<select class="form-control  mb-2" name="matkul-1" id="matkul-1" style="display: none;" required>
					<option value="" selected style="display: show;">-Pilihan Matkul 1-</option>
					<option value="pw" style="display: none;" id="matkul-1-1">Pemrograman Web</option>
					<option value="ddp" style="display: none;" id="matkul-1-2">Dasar-dasar Pemrograman</option>
					<option value="kdjk" style="display: none;" id="matkul-2-1">Komunikasi Data dan Jaringan Komputer</option>
					<option value="imk" style="display: none;" id="matkul-2-2">Interaksi Manusia dan Komputer</option>
					<option value="ws" style="display: none;" id="matkul-2-3">Web Semantik</option>
					<option value="sda" style="display: none;" id="matkul-2-4">Struktur Data dan Algoritma</option>
					<option value="sbd" style="display: none;" id="matkul-2-5">Sistem Basis Data</option>
					<option value="di" style="display: none;" id="matkul-3-1">Desain Interaksi</option>
					<option value="ad" style="display: none;" id="matkul-3-2">Arsitektur Data</option>
					<option value="sas" style="display: none;" id="matkul-3-3">Sistem Administrasi Server</option>
					<option value="kb" style="display: none;" id="matkul-3-4">Kecerdasan Buatan</option>
					<option value="pm" style="display: none;" id="matkul-4-1">Pemrograman Mobile</option>
					<option value="si" style="display: none;" id="matkul-4-2">Sistem Interaktif</option>
					<option value="pml" style="display: none;" id="matkul-4-3">Pembelajaran Mesin Lanjutan</option>
					<option value="ssa" style="display: none;" id="matkul-4-4">Sistem Sensor dan Aplikasi</option>
				</select>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-2">
				<label for="ip1-1">Nilai matkul pilihan 1</label>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2 custom-select" id="ip1-1" name="ip1-1" required>
					<option value="">-Nilai di Kelas-</option>
					<option value="4">A</option>
					<option value="3.5">B+</option>
					<option value="3">B</option>
					<option value="2.5">C+</option>
					<option value="2">C</option>
					<option value="0">F</option>
				</select>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2 custom-select" id="ip1-2" name="ip1-2" required>
					<option value="">-Nilai di Lab-</option>
					<option value="4">A</option>
					<option value="3.5">B+</option>
					<option value="3">B</option>
					<option value="2.5">C+</option>
					<option value="2">C</option>
					<option value="0">F</option>
				</select>
			</div>
<!-- 
			<div class="col-3">
				<div class="form-group mb-2">
					<input type="text" id="ip1-1" placeholder="Nilai di Kelas" name="ip1" class="form-control" aria-describedby="nilaiKelas" required>
					<small id="nilaiKelas" class="text-muted">
					    Diisi dengan A/B+/B/C+/C/D/E
					</small>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group mb-2">
					<input type="text" id="ip1-2" placeholder="Nilai di Lab" name="ip2" class="form-control" aria-describedby="nilaiLab" required>
					<small id="nilaiLab" class="text-muted">
					    Diisi dengan A/B+/B/C+/C/D/E
					</small>
				</div>
			</div> -->
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="sem2">Mata kuliah pilihan 2</label>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2" id="sem2" required>
					<option value="">-Semester-</option>
					<option value="1">1</option>
					<option value="3">3</option>
					<option value="5">5</option>
					<option value="7">7</option>
				</select>
			</div>
			<div class="col-4">
				<select class="form-control  mb-2" name="matkul-2" id="matkul-2" style="display: none;" required>
					<option value="">-Pilihan Matkul 1-</option>
					<option value="pw" style="display: none;" id="matkul-1-1-1">Pemrograman Web</option>
					<option value="ddp" style="display: none;" id="matkul-1-2-1">Dasar-dasar Pemrograman</option>
					<option value="kdjk" style="display: none;" id="matkul-2-1-1">Komunikasi Data dan Jaringan Komputer</option>
					<option value="imk" style="display: none;" id="matkul-2-2-1">Interaksi Manusia dan Komputer</option>
					<option value="ws" style="display: none;" id="matkul-2-3-1">Web Semantik</option>
					<option value="sda" style="display: none;" id="matkul-2-4-1">Struktur Data dan Algoritma</option>
					<option value="sbd" style="display: none;" id="matkul-2-5-1">Sistem Basis Data</option>
					<option value="di" style="display: none;" id="matkul-3-1-1">Desain Interaksi</option>
					<option value="ad" style="display: none;" id="matkul-3-2-1">Arsitektur Data</option>
					<option value="sas" style="display: none;" id="matkul-3-3-1">Sistem Administrasi Server</option>
					<option value="kb" style="display: none;" id="matkul-3-4-1">Kecerdasan Buatan</option>
					<option value="pm" style="display: none;" id="matkul-4-1-1">Pemrograman Mobile</option>
					<option value="si" style="display: none;" id="matkul-4-2-1">Sistem Interaktif</option>
					<option value="pml" style="display: none;" id="matkul-4-3-1">Pembelajaran Mesin Lanjutan</option>
					<option value="ssa" style="display: none;" id="matkul-4-4-1">Sistem Sensor dan Aplikasi</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="ip2-1">Nilai matkul pilihan 2</label>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2 custom-select" id="ip2-1" name="ip2-1" required>
					<option value="">-Nilai di Kelas-</option>
					<option value="4">A</option>
					<option value="3.5">B+</option>
					<option value="3">B</option>
					<option value="2.5">C+</option>
					<option value="2">C</option>
					<option value="0">F</option>
				</select>
			</div>
			<div class="col-2">
				<select class="form-control  mb-2 custom-select" id="ip2-2" name="ip2-2" required>
					<option value="">-Nilai di Lab-</option>
					<option value="4">A</option>
					<option value="3.5">B+</option>
					<option value="3">B</option>
					<option value="2.5">C+</option>
					<option value="2">C</option>
					<option value="0">F</option>
				</select>
			</div>
			<!-- <div class="col-3">
				<div class="form-group mb-2">
					<input type="text" id="ip2-1" placeholder="Nilai di Kelas" name="ip1" class="form-control" aria-describedby="nilaiKelas" required>
					<small id="nilaiKelas" class="text-muted">
					    Diisi dengan A/B+/B/C+/C/D/E
					</small>
				</div>
			</div>
			<div class="col-3">
				<div class="form-group mb-2">
					<input type="text" id="ip2-2" placeholder="Nilai di Lab" name="ip2" class="form-control" aria-describedby="nilaiLab" required>
					<small id="nilaiLab" class="text-muted">
					    Diisi dengan A/B+/B/C+/C/D/E
					</small>
				</div>
			</div> -->
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="contact">No Whatsapp/Line ID</label>
			</div>
			<div class="col-4">
				<div class="form-group mb-2">
					<input type="text" class="form-control" placeholder="No Whatsapp/Line ID" id="contact" name="contact" required>
					<div class="invalid-feedback">
					  	Masukkan No Whatsapp/Line ID anda
					</div>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="cv">Curiculum Vitae</label>
			</div>
			<div class="col-6">
				<div class="custom-file mb-2">
					<input type="file" class="custom-file-input cv" id="cv" name="cv" required>
					<label class="custom-file-label cv" for="cv">Upload CV</label>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="surat">Berkas</label>
			</div>
			<!-- <div class="col-6">
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surat" required>
			    <small id="nilaiLab" class="text-muted">
			        Surat Pendaftaran didownload dari <a href="#">Link</a>. Diisi manual, discan lalu diupload.
			    </small>
			</div> -->
			<div class="col-6">
				<div class="custom-file mb-2">
					<input type="file" class="custom-file-input" id="surat" name="surat" required>
					<label class="custom-file-label surat" for="surat">Upload Surat Pendaftaran</label>
					<small id="nilaiLab" class="text-muted">
					    Surat Pendaftaran didownload dari <a href="#">Link</a>. Diisi manual, discan lalu diupload.
					</small>
				</div>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-2">
				<label for="Textarea">Alasan menjadi Aslab</label>
			</div>
			<div class="col-6">
				<textarea class="form-control" name="alasan" id="Textarea" placeholder="Minimum 500 Karakter" required></textarea>
			</div>
		</div>
		<button class="btn btn-primary" type="submit" id="daftar" name="submit">Submit form</button>
		
	</form>
</div>
<!-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script> -->
<script>
    $('#cv').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.cv').html(fileName);
    })
</script>
<script>
    $('#surat').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.surat').html(fileName);
    })
</script>
<script type="text/javascript">
	$("#sem").change(function(){
	    if($(this).val() == 1){
	    	document.getElementById("matkul-1").selectedIndex = "0";
	    	$("#matkul-1").show();
	    	$("#matkul-1-1").show();
	    	$("#matkul-1-2").show();
	    	$("#matkul-2-1").hide();
	    	$("#matkul-2-2").hide();
	    	$("#matkul-2-3").hide();
	    	$("#matkul-2-4").hide();
	    	$("#matkul-2-5").hide();
	    	$("#matkul-3-1").hide();
	    	$("#matkul-3-2").hide();
	    	$("#matkul-3-3").hide();
	    	$("#matkul-3-4").hide();
	    	$("#matkul-4-1").hide();
	    	$("#matkul-4-2").hide();
	    	$("#matkul-4-3").hide();
	    	$("#matkul-4-4").hide();
	    }
	    else if($(this).val() == 3){
	    	document.getElementById("matkul-1").selectedIndex = "0";
	    	$("#matkul-1").show();
	    	$("#matkul-1-1").hide();
	    	$("#matkul-1-2").hide();
	    	$("#matkul-2-1").show();
	    	$("#matkul-2-2").show();
	    	$("#matkul-2-3").show();
	    	$("#matkul-2-4").show();
	    	$("#matkul-2-5").show();
	    	$("#matkul-3-1").hide();
	    	$("#matkul-3-2").hide();
	    	$("#matkul-3-3").hide();
	    	$("#matkul-3-4").hide();
	    	$("#matkul-4-1").hide();
	    	$("#matkul-4-2").hide();
	    	$("#matkul-4-3").hide();
	    	$("#matkul-4-4").hide();
	    	
	    }
	    else if($(this).val() == 5){
	    	document.getElementById("matkul-1").selectedIndex = "0";
	    	$("#matkul-1").show();
	    	$("#matkul-1-1").hide();
	    	$("#matkul-1-2").hide();
	    	$("#matkul-2-1").hide();
	    	$("#matkul-2-2").hide();
	    	$("#matkul-2-3").hide();
	    	$("#matkul-2-4").hide();
	    	$("#matkul-2-5").hide();
	    	$("#matkul-3-1").show();
	    	$("#matkul-3-2").show();
	    	$("#matkul-3-3").show();
	    	$("#matkul-3-4").show();
	    	$("#matkul-4-1").hide();
	    	$("#matkul-4-2").hide();
	    	$("#matkul-4-3").hide();
	    	$("#matkul-4-4").hide();
	    }
	    else if($(this).val() == 7){
	    	document.getElementById("matkul-1").selectedIndex = "0";
	    	$("#matkul-1").show();
	    	$("#matkul-1-1").hide();
	    	$("#matkul-1-2").hide();
	    	$("#matkul-2-1").hide();
	    	$("#matkul-2-2").hide();
	    	$("#matkul-2-3").hide();
	    	$("#matkul-2-4").hide();
	    	$("#matkul-2-5").hide();
	    	$("#matkul-3-1").hide();
	    	$("#matkul-3-2").hide();
	    	$("#matkul-3-3").hide();
	    	$("#matkul-3-4").hide();
	    	$("#matkul-4-1").show();
	    	$("#matkul-4-2").show();
	    	$("#matkul-4-3").show();
	    	$("#matkul-4-4").show();
	    }
	    else{
	    	$("#matkul-1").hide();
	    	$("#matkul-1-1").hide();
	    	$("#matkul-1-2").hide();
	    	$("#matkul-2-1").hide();
	    	$("#matkul-2-2").hide();
	    	$("#matkul-2-3").hide();
	    	$("#matkul-2-4").hide();
	    	$("#matkul-2-5").hide();
	    	$("#matkul-3-1").hide();
	    	$("#matkul-3-2").hide();
	    	$("#matkul-3-3").hide();
	    	$("#matkul-3-4").hide();
	    	$("#matkul-4-1").hide();
	    	$("#matkul-4-2").hide();
	    	$("#matkul-4-3").hide();
	    	$("#matkul-4-4").hide();
	    }

	});
	$("#sem2").change(function(){
	    if($(this).val() == 1){
	    	document.getElementById("matkul-2").selectedIndex = "0";
	    	$("#matkul-2").show();
	    	$("#matkul-1-1-1").show();
	    	$("#matkul-1-2-1").show();
	    	$("#matkul-2-1-1").hide();
	    	$("#matkul-2-2-1").hide();
	    	$("#matkul-2-3-1").hide();
	    	$("#matkul-2-4-1").hide();
	    	$("#matkul-2-5-1").hide();
	    	$("#matkul-3-1-1").hide();
	    	$("#matkul-3-2-1").hide();
	    	$("#matkul-3-3-1").hide();
	    	$("#matkul-3-4-1").hide();
	    	$("#matkul-4-1-1").hide();
	    	$("#matkul-4-2-1").hide();
	    	$("#matkul-4-3-1").hide();
	    	$("#matkul-4-4-1").hide();
	    }
	    else if($(this).val() == 3){
	    	document.getElementById("matkul-2").selectedIndex = "0";
	    	$("#matkul-2").show();
	    	$("#matkul-1-1-1").hide();
	    	$("#matkul-1-2-1").hide();
	    	$("#matkul-2-1-1").show();
	    	$("#matkul-2-2-1").show();
	    	$("#matkul-2-3-1").show();
	    	$("#matkul-2-4-1").show();
	    	$("#matkul-2-5-1").show();
	    	$("#matkul-3-1-1").hide();
	    	$("#matkul-3-2-1").hide();
	    	$("#matkul-3-3-1").hide();
	    	$("#matkul-3-4-1").hide();
	    	$("#matkul-4-1-1").hide();
	    	$("#matkul-4-2-1").hide();
	    	$("#matkul-4-3-1").hide();
	    	$("#matkul-4-4-1").hide();
	    	
	    }
	    else if($(this).val() == 5){
	    	document.getElementById("matkul-2").selectedIndex = "0";
	    	$("#matkul-2").show();
	    	$("#matkul-1-1-1").hide();
	    	$("#matkul-1-2-1").hide();
	    	$("#matkul-2-1-1").hide();
	    	$("#matkul-2-2-1").hide();
	    	$("#matkul-2-3-1").hide();
	    	$("#matkul-2-4-1").hide();
	    	$("#matkul-2-5-1").hide();
	    	$("#matkul-3-1-1").show();
	    	$("#matkul-3-2-1").show();
	    	$("#matkul-3-3-1").show();
	    	$("#matkul-3-4-1").show();
	    	$("#matkul-4-1-1").hide();
	    	$("#matkul-4-2-1").hide();
	    	$("#matkul-4-3-1").hide();
	    	$("#matkul-4-4-1").hide();
	    }
	    else if($(this).val() == 7){
	    	document.getElementById("matkul-2").selectedIndex = "0";
	    	$("#matkul-2").show();
	    	$("#matkul-1-1-1").hide();
	    	$("#matkul-1-2-1").hide();
	    	$("#matkul-2-1-1").hide();
	    	$("#matkul-2-2-1").hide();
	    	$("#matkul-2-3-1").hide();
	    	$("#matkul-2-4-1").hide();
	    	$("#matkul-2-5-1").hide();
	    	$("#matkul-3-1-1").hide();
	    	$("#matkul-3-2-1").hide();
	    	$("#matkul-3-3-1").hide();
	    	$("#matkul-3-4-1").hide();
	    	$("#matkul-4-1-1").show();
	    	$("#matkul-4-2-1").show();
	    	$("#matkul-4-3-1").show();
	    	$("#matkul-4-4-1").show();
	    }
	    else{
	    	$("#matkul-2").hide();
	    	$("#matkul-1-1-1").hide();
	    	$("#matkul-1-2-1").hide();
	    	$("#matkul-2-1-1").hide();
	    	$("#matkul-2-2-1").hide();
	    	$("#matkul-2-3-1").hide();
	    	$("#matkul-2-4-1").hide();
	    	$("#matkul-2-5-1").hide();
	    	$("#matkul-3-1-1").hide();
	    	$("#matkul-3-2-1").hide();
	    	$("#matkul-3-3-1").hide();
	    	$("#matkul-3-4-1").hide();
	    	$("#matkul-4-1-1").hide();
	    	$("#matkul-4-2-1").hide();
	    	$("#matkul-4-3-1").hide();
	    	$("#matkul-4-4-1").hide();
	    }

	});
</script>