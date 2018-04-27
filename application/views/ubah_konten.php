<!DOCTYPE html>
<html>
<head>
	<title>Add Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Tambahkan Artikel</h1></center>

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
				<td><input type="text" name="input_judul" class="form-control" value="<?php echo set_value('input_judul', $tampil->judul); ?>" required></td>
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
					<select name="id_cat" class="form-control" required>
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
</body>
</html>