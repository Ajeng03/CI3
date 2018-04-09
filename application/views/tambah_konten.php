<!DOCTYPE html>
<html>
<head>
	<title>Add Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Tambahkan Artikel</h1></center>

<div class="alert-warning"><?php echo (isset($message))? : "";?></div>
<?php echo form_open('home/tambah_artikel', array('enctype'=>'multipart/form-data')); ?>

	<table border="0px">
			<tr>
				<td>Judul Artikel</td>
				<td>:</td>
				<td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
			</tr>
			<tr>
				<td>Isi Konten</td>
				<td>:</td><br>
				<td>
				<textarea name="input_konten" rows="10" cols="50"></textarea>
				</td>
			</tr>
			<tr>
				<td>Tanggal Posting</td>
				<td>:</td>
				<td><input type="text" name="input_post"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td>:</td>
				<td><input type="file" name="input_gambar"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" name="input_pengarang" required=""></td>
			</tr>
			<td colspan="3" align="center">
				<input type="submit" name="simpan" value="Posting">
				<input type="reset" name="reset" value="Cancel">
			</td>
		</table>
		</font>
</body>
</html>