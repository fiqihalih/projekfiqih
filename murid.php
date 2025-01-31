<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align ="center">
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
	<p align="center">INI ADALAH DATA SISWA YANG SUDAH MENGEMBALIKAN BUKU</p>
</body>
</html>