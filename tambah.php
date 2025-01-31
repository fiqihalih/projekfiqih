<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="murid.php">KEMBALI</a>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah.aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Kelas"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>