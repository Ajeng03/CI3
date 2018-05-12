<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/admin/images/favicon.png">
    <title>Kategori</title>
    <link href="assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?> assets/dt/datatables.min.css"/>
</head>

<!-- <body style="background-color: orange"> -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="alert-warning"><?php echo (isset($message))? : "";?></div>
                    <?php echo form_open('category/create', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
                    <?php echo validation_errors(); ?>
<table>
    <h1>Tambah Kategori Baru</h1>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>
                <input type="text" class="form-control" name="cat_name" value="<?php echo set_value('cat_name'); ?>" size="30">
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
                <input type="text" class="form-control" name="cat_description" value="<?php echo set_value('cat_description'); ?>" size="30">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="reset" value="Cancel">
            </td>
        </tr>
</table>
            
            </div>
        </div>
    </div>
    
<center><h1>Kategori</h1></center>
 <table border="1" class="table" id="myTable">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Tanggal Posting</th>
                <th>Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $key): ?>
                <tr>
                    
                    <td><?php echo $key->cat_name; ?></td>
                    <td><?php echo $key->cat_description; ?></td>
                    <td><?php echo $key->date_created; ?></td>
                    <td colspan="3" align="center">
                        <a href="category/ubah/<?=$key->id_cat?>"><button type="button" class="btn btn-primary">Update</button></a>
                        <a href="category/hapus/<?=$key->id_cat?>"><button type="button" class="btn btn-primary" name="delete">Delete</button></a></p>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        </table>

    <script src="assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="assets/admin/plugins/bootstrap/js/tether.min.js"></script>
    <script src="assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/admin/js/jquery.slimscroll.js"></script>
    <script src="assets/admin/js/waves.js"></script>
    <script src="assets/admin/js/sidebarmenu.js"></script>
    <script src="assets/admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/admin/js/custom.min.js"></script>
    <script src="assets/admin/plugins/flot/jquery.flot.js"></script>
    <script src="assets/admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/admin/js/flot-data.js"></script>
    
    <script src="assets/admin/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>