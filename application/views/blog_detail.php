<!DOCTYPE html>
<html>
<head>
	<title>Detail Favorite Artikel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/admin/images/favicon.png">
    <link href="../../assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/admin/css/style.css" rel="stylesheet">
    <link href="../../assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<!-- <body style="background-color: orange"> -->
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
					<font face="Kristen ITC"><?=$key->tanggal_posting;?><br>
					<font face="Kristen ITC"><?=$key->pengarang;?> - 
					<font face="Kristen ITC"><?=$key->gender;?><br>
					<font face="Kristen ITC"><?=$key->kontak;?>
				</td></font>
			</tr>
			<tr>
				<td align="justify"><?=$key->konten_artikel;?></td>
			</tr>
		</table>
	<?php } ?>

	<script src="../../assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="../../assets/admin/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/admin/js/jquery.slimscroll.js"></script>
    <script src="../../assets/admin/js/waves.js"></script>
    <script src="../../assets/admin/js/sidebarmenu.js"></script>
    <script src="../../assets/admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/admin/js/custom.min.js"></script>
    <script src="../../assets/admin/plugins/flot/jquery.flot.js"></script>
    <script src="../../assets/admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../../assets/admin/js/flot-data.js"></script>
    <script src="../../assets/admin/plugins/styleswitcher/jQuery.style.switcher.js"></script>
	
</body>
</html>