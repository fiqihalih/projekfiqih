<?php
include 'koneksi.php';
   $username = $_POST ['username'];
   $password = $_POST ['password'];

   $data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

   $cek = mysqli_num_rows($data);
   if($cek > 0){
    header("location:murid.php");
   }else{
    header("location:murid.php"); 
   }
?>