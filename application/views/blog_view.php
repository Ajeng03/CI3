<!DOCTYPE html>
<html>
<head>
	<title>Favorite Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Artikel</h1></center>
	</font>
	<?php 
	foreach ($tampil as $key) {?>
		<table border="1" width="600">
			<font face="Kristen ITC">
			<tr>
				<td>
				<font face="Kristen ITC">
				Judul Artikel   : <a href="<?=site_url('home/tampil_blog/').$key->id; ?>"><?=$key->judul;?></a><br>
				Pengarang   : <?=$key->pengarang;?><br>
				Tanggal Posting : <?=$key->tanggal_posting;?></a><br>
				Klik judul untuk membaca artikel secara lengkap.
				</font>
				</td>
			</tr>
			<br>
			<br>
		</font>
		</table>
	<?php } ?>
	<br>
	<br>
	<a href="../home/tambah_artikel">Tambah Artikel</a>
</body>
</html>