<!DOCTYPE html>
<html>
<head>
	<title>Artikel Favorite</title>
</head>
<body>
	<?php 
	foreach ($tampil as $key) {?>
		<table border="0" width="500" align="center">
			<tr>
				<td align="center"><font face="Kristen ITC"><?=$key->judul;?></td></font>
			</tr>
			<tr>
				<td align="center"><img src="<?=base_url()?>assets/picture/<?=$key->image;?>" height="10%"></td>
			</tr>
			<tr>
				<td align="center">
					<font face="Kristen ITC"><?=$key->tanggal_posting;?> - 
					<font face="Kristen ITC"><?=$key->pengarang;?>
				</td></font>
			</tr>
			<tr>
				<td align="justify"><?=$key->konten_artikel;?></td>
			</tr>
		</table>
	<?php } ?>
</body>
</html>