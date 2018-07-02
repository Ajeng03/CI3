<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
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

 <title>Ubah Data User</title>

    <table border="0px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo set_value('nama', $tampil->nama); ?>" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <select name="gender" style="width: 169px;" value="<?php echo set_value('gender', $tampil->gender); ?>" required>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td><input type="text" name="kodepos" value="<?php echo set_value('kodepos', $tampil->kodepos); ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="input_email" value="<?php echo set_value('input_email', $tampil->email); ?>" required></td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td><input type="text" name="no_telp" value="<?php echo set_value('no_telp', $tampil->no_telp); ?>" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo set_value('username', $tampil->username); ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td><br>
                <td><input type="text" name="password" value="<?php echo set_value('password', $tampil->password); ?>" required></td>
            </tr>
            <td colspan="3" align="center">
                <input type="submit" name="simpan" value="Save">
                <input type="reset" name="reset" value="Cancel">
            </td>
        </table>
    
    </form><script src="../assets/admin/plugins/jquery/jquery.min.js"></script>
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