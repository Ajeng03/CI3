<!DOCTYPE html>
<html>
<head>
	<title>Edit Artikel</title>
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
	<body>
	<font face="Kristen ITC">
	<center><h1>Edit Artikel</h1></center>

<div class="alert-warning"><?php echo (isset($message))? : "";?></div>

<?php echo form_open("home/ubah/".$tampil->id, array('enctype'=>'multipart/form-data')); ?>	
<?php echo validation_errors(); ?>
<?php $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');?>
<?php echo form_open_multipart('home/ubah_konten', array('class' => 'needs-validation', 'novalidate' => '')); ?>

<form class="needs-validation" novalidate>
	<table border="0px">
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul', $tampil->judul); ?>" required></td>
			</tr>
			<tr>
				<td>Isi Konten</td>
				<td>:</td><br>
				<td>
				<textarea name="input_konten" rows="10" cols="50" required><?php echo set_value('input_konten', $tampil->konten_artikel); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input type="file" name="input_gambar" ></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" name="input_pengarang" value="<?php echo set_value('input_pengarang', $tampil->pengarang); ?>" required></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<select name="id_cat" required>
					<option value="">Pilih Kategori</option>
					<?php foreach($categories as $category): ?>
						<option value="<?php echo $category->id_cat; ?>"><?php echo $category->cat_name; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<input type="text" name="input_gender" required="" value="<?php echo set_value('input_gender', $tampil->gender); ?>" required>
				</td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td>:</td>
				<td><input type="text" name="input_kontak" required="" value="<?php echo set_value('input_kontak', $tampil->kontak); ?>" required></td>
			</tr>
			<td colspan="3" align="center">
				<input type="submit" name="simpan" value="Edit">
				<input type="reset" name="reset" value="Cancel">
			</td>
		</table>
		</font>

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