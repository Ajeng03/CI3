<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin page content -->
<!DOCTYPE html>
<html>
<head>
	<title>Favorite Artikel</title>
</head>
<body style="background-color: orange">
	<font face="Kristen ITC">
	<center><h1>Category</h1></center>
	</font>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">

					<div class="alert-warning"><?php echo (isset($message))? : "";?></div>

					<?php echo form_open( 'category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>

					<?php echo validation_errors(); ?>

			<table border="0px">
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
</section>
</main>