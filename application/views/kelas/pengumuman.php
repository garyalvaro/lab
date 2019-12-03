<!DOCTYPE html>
<html>
<head>
	<title>Buat Pengumuman</title>
</head>
<body>
	<p>Tes : <?php echo $this->session->userdata('nim');?></p>
	<table>	
		<tr>
			<td>Nama Kelas : </td>
			<?php foreach ($tes as $key ) {?>
               <td><?php echo $key->nama_kelas; ?></td>
            <?php } ?>
		</tr>
		<tr>
			<td>Dari tanggal : </td>
			<td><input type="date" name="before"></td>
			<td>Ke tanggal : </td>
			<td><input type="date" name="after"></td>
		</tr>
		<tr>
			<td>Dari jam</td>
			<td><input type="time" name="jam1"></td>
			<td>Ke jam</td>
			<td><input type="time" name="jam2"></td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Kirim">
	
</body>
</html>
