<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body align="center">
<form method="POST" action="aksi_login.php">
  <div class="wrapper">
    <form action="">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" value="Simpan">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="#">Register</a></p>
</div>
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
</form>
<h1 align="center"> peminjaman buku perpustakaan </h1>
   <p align="center"> terimakasih sudah mendaftar di website ini</p> 
   <br>
   <a href="admin.php">tambah data</a>
   <br>
   <br>
   <table border = "2" align="center">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Kelas</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from table_perpus");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Alamat']; ?></td>
				<td><?php echo $d['Kelas']; ?></td>
				<td>
					<a href="edit.php?No=<?php echo $d['No'];?>">Edit </a>
					<a href=""> Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	</table>
	<p align="center">INI ADALAH DATA SISWA YANG SUDAH MENGEMBALIKAN BUKU</p>

</body>
</html>