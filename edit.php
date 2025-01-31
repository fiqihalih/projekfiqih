<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edt Data</title>
</head>
<body>
    <h2>EDIT DATA</h2>
    <?php
    include 'koneksi.php';
    $No = $_GET['No'];
    $data = mysqli_query($koneksi,"SELECT * FROM table_perpus WHERE No ='$No' ");
    while($d = mysqli_fetch_array($data)){
    ?>
<form method="post" action="murid.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $d['Nama'];?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $d['Alamat'];?>"></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td><input type="text" name="Kelas" value="<?php echo $d['Kelas'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>