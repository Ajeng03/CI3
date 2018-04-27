<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<!DOCTYPE html>
<html>
<head>
	<title>Favorite Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Kategori</h1></center>
	</font>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">

					<div class="alert-warning"><?php echo (isset($message))? : "";?></div>

					<?php echo form_open('category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

					<?php echo validation_errors(); ?>

			<table border="0px">
				<h1>Tambah Kategori Baru</h1>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<input type="text" name="cat_name" value="<?php echo set_value('cat_name'); ?>" size="30">
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td>
					<input type="text" name="cat_description" value="<?php echo set_value('cat_description'); ?>" size="30">
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
<br>
<h1>Kategori</h1>
	<?php 
	foreach ($categories as $key) {?>
	<div>
		<table border="0px">
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<?php echo $key->cat_name; ?>
				</td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td>
					<?php echo $key->cat_description; ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Posting</td>
				<td>:</td>
				<td>
					<?php echo $key->date_created; ?>
				</td>
			</tr>
		<td colspan="3" align="center">
			<a href="category/ubah/<?=$key->id_cat?>"><button type="button" class="btn btn-primary">Update</button></a>
			<a href="category/hapus/<?=$key->id_cat?>"><button type="button" class="btn btn-primary" name="delete">Delete</button></a></p>
    	</td>
</div>
<?php } ?>
</table>
</section>
</main>
</body>
</html>