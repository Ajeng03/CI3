<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/style.css" rel="stylesheet">
    <link href="../assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?> assets/dt/datatables.min.css"/>
</head>
<body>
<!-- <body style="background-color: orange"> -->
    <font face="Kristen ITC">
    <center><h1>Data User</h1></center>
    </font>
    <table border="2" class="table" id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kode Pos</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Username</th>
                <th>Password</th>
                <th>Register Date</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($tampil_user as $key): ?>
            <tr>
                <td><?php echo $key-> user_id; ?></td>
                <td><?php echo $key-> nama; ?></td>
                <td><?php echo $key-> gender; ?></td>
                <td><?php echo $key-> kodepos; ?></td>
                <td><?php echo $key-> email; ?></td>
                <td><?php echo $key-> no_telp; ?></td>
                <td><?php echo $key-> username; ?></td>
                <td><?php echo $key-> password; ?></td>
                <td><?php echo $key-> register_date; ?></td>
                <td>
                    <a href="../Admin/ubah_user/<?=$key->user_id?>"><button type="button" class="btn btn-primary">Update</button></a>
                    <a href="../Admin/hapus_user/<?=$key->user_id?>"><button type="button" class="btn btn-primary" name="delete">Delete</button></a></p>
                </td>
            </tr>
    <?php endforeach ?>
        </tbody>
    </table>

    <script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/admin/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/admin/js/jquery.slimscroll.js"></script>
    <script src="../assets/admin/js/waves.js"></script>
    <script src="../assets/admin/js/sidebarmenu.js"></script>
    <script src="../assets/admin/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/admin/js/custom.min.js"></script>
    <script src="../assets/admin/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/admin/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../assets/admin/js/flot-data.js"></script>
    <script src="../assets/admin/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/dt/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>