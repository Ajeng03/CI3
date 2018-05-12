<!DOCTYPE html>
<html>
<head>
	<title>Edit Kategori</title>
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
<body>
<!-- <body style="background-color: orange"> -->
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
<br>
<form class="needs-validation" novalidate>
			<table border="0px">
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