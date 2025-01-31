<?php
//koneksi data base
include 'koneksi.php';

//menagkap data yang di kirim dari form
$No = $_POST['No'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Kelas = $_POST['Kelas'];

//menginpurt dat ke database
mysqli_query($koneksi, "insert into table_perpus values('$No','$Nama','$Alamat','$Kelas')");

//mengalihkan hamalan kembali ke murid.php
header("location:murid.php");
?>