<!DOCTYPE html>
<html>
<head>
	<title>Add Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Edit Kategori</h1></center>
<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">

					<div class="alert-warning"><?php echo (isset($message))? : "";?></div>

<?php echo form_open("category/ubah/".$tampil->id_cat, array('enctype'=>'multipart/form-data')); ?>	
<?php echo validation_errors(); ?>
<?php $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');?>

<form class="needs-validation" novalidate>
			<table border="0px">
				<h1>Tambah Kategori Baru</h1>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<input type="text" name="cat_name" class="form-control" value="<?php echo set_value('cat_name', $tampil->cat_name); ?>" required>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td>
					<input type="text" name="cat_description" class="form-control" value="<?php echo set_value('cat_description', $tampil->cat_description); ?>" required>
				</td>
			</tr>
			<td colspan="3" align="center">
				<input type="submit" name="simpan" value="Simpan">
				<input type="reset" name="reset" value="Cancel">
			</td>
		</table>
			</div>
		</div>
	</div>
</section>
</body>
</html>