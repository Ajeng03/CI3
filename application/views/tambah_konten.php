<!DOCTYPE html>
<html>
<head>
	<title>Add Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Tambahkan Artikel</h1></center>

<div class="alert-warning"><?php echo (isset($message))? : "";?></div>

<?php echo validation_errors(); ?>

<?php echo form_open('home/tambah_artikel', array('enctype'=>'multipart/form-data')); ?>

<?php echo form_open_multipart('home/tambah_artikel', array('class' => 'needs-validation', 'novalidate' => '')); ?>

	<table border="0px">
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td>
					<input type="text" class="form-control" name="input_judul" value="<?php echo set_value('input_judul'); ?>" size="30">
				</td>
			</tr>
			<tr>
				<td>Isi Konten</td>
				<td>:</td><br>
				<td>
				<textarea name="input_konten" class="form-control" rows="10" cols="50" size="30"><?php echo set_value('input_konten'); ?></textarea>
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input type="file" name="input_gambar"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td>
					<input type="text" class="form-control" name="input_pengarang" value="<?php echo set_value('input_pengarang'); ?>" size="30">
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
					<select name="input_gender" style="width: 200px;">
          				<option value="Perempuan">Perempuan</option>
          				<option value="Laki-laki">Laki-Laki</option>
        			</select>
				</td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="input_kontak" value="<?php echo set_value('input_kontak'); ?>" size="30"></td>
			</tr>
			<td colspan="3" align="center">
				<input type="submit" name="simpan" value="Posting">
				<input type="reset" name="reset" value="Cancel">
			</td>
		</table>
		</font>
</body>
</html>