<!DOCTYPE html>
<html>
<head>
	<title>Favorite Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Artikel</h1></center>
	</font>
	<a href="../home/tambah_artikel"><button type="button" class="btn btn-primary">Tambah Artikel</button></a>
	<a href="../category"><button type="button" class="btn btn-primary">Kategori</button></a>
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
				Kategori : <?=$key->cat_name;?></a><br>
				Klik judul untuk membaca artikel secara lengkap.<br>
				<p align="center">
				<a href="../home/ubah/<?=$key->id?>"><button type="button" class="btn btn-primary">Update</button></a>
				<a href="../home/hapus/<?=$key->id?>"><button type="button" class="btn btn-primary" name="delete">Delete</button></a></p>
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
</body>
</html>