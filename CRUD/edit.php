<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Project 1</title>
</head>
<body>
<div class="judul">
		<h1><b>Sistem Informasi Mahasiswa</b></h1>

</div>
</br>
<a href="index.php"><< KEMBALI </a>
</br>
</br>
<h3> Edit data</h3>

<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from datamahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
 ?>
<form method="post" action="update.php">
	<table>
		<tr>
			<td>Nim</td>
			<td>
				<input type="hidden" name="ID" value="<?php echo $d['ID'];?>">
				<input type="text" name="Nim" value ="<?php echo $d['Nim']; ?>">
			</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="Nama" value="<?php echo $d['Nama'];?>"></td>
		</tr>
<tr>
			<td>Jurusan</td>
			<td><input type="text" name="Jurusan" value="<?php echo $d['Jurusan'];?>"></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><input type="text" name="Fakultas" value="<?php echo $d['Fakultas'];?>"></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><input type="text" name="Semester" value="<?php echo $d['Semester'];?>"></td>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td><input type="text" name="Angkatan" value="<?php echo $d['Angkatan'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>
<?php

}
?>

</body>
</html>