<!DOCTYPE html>
<html>
<head>
    <title>Favorite Artikel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
    <link href="../assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/style.css" rel="stylesheet">
    <link href="../assets/admin/css/colors/blue.css" id="theme" rel="stylesheet">
</head>
<body>
<!-- <body style="background-color: orange"> -->
    <font face="Kristen ITC">
    <center><h1>Artikel</h1></center>
    </font>
    <a href="../home/tambah_artikel"><button type="button" class="btn btn-primary">Tambah Artikel</button></a>
    <a href="../category"><button type="button" class="btn btn-primary">Kategori</button></a>
    <?php 
    foreach ($tampil as $key) {?>
        <table border="1" width="600">
            <font face="Kristen ITC">
            <tr>
                <td>
                <font face="Kristen ITC">
                Judul Artikel   : <a href="<?=site_url('home/tampil_blog/').$key->id; ?>"><?=$key->judul;?></a><br>
                Pengarang   : <?=$key->pengarang;?><br>
                Tanggal Posting : <?=$key->tanggal_posting;?></a><br>
                Kategori : <?=$key->cat_name;?></a><br>
                Klik judul untuk membaca artikel secara lengkap.<br>
                <p align="center">
                <a href="../home/ubah/<?=$key->id?>"><button type="button" class="btn btn-primary">Update</button></a>
                <a href="../home/hapus/<?=$key->id?>"><button type="button" class="btn btn-primary" name="delete">Delete</button></a></p>
                </font>
                </td>
            </tr>
            <br>
            <br>
        </font>
        </table>
    <?php } ?>
    <br>
    <br>

<nav aria-label="Page navigation example">
 <ul class="pagination justify-content-center">
   <li class="page-item disabled">
     <a class="page-link" href="#" tabindex="-1">Previous</a>
   </li>
   <li class="page-item"><a class="page-link" href="#">1</a></li>
   <li class="page-item"><a class="page-link" href="#">2</a></li>
   <li class="page-item"><a class="page-link" href="#">3</a></li>
   <li class="page-item">
     <a class="page-link" href="#">Next</a>
   </li>
 </ul>
</nav>
<?php
        // $links ini berasal dari fungsi pagination
        // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
        if (isset($links)) {
            echo $links;
        }
        ?>    
    </main>   

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
</body>
</html>