<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "fakih";

 //memberi alamat koneksi
 $koneksi = mysqli_connect($host,$user,$pass,$db,);

 if(mysqli_connect_errno()){
    echo "alamat data base error" .mysqli_connect_errno();
 }
?>