<!DOCTYPE html>
<html>
<head><title> Sistem Informasi Project 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
		<h1><b>Sistem Informasi Mahasiswa</b></h1>

</div>
</br>

<?php
if (isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
	echo "data sudah berhasil diinput";
	}
		else if($pesan =="update"){
		echo "data sudah berhasil diupdate";
	} else if ($pesan == "hapus"){
	echo "data sudah di hapus";
}
	}

?>
</br>
<a class="tombol" href="input.php"> 
	<div class="button">
		<h5>TAMBAH DATA</h5>
	</div>
</a>
<h3>List Data</h3>
<table border="5">
<tr>
	<th>No</th>
	<th>Nim</th>
	<th>Nama</th>
	<th>Jurusan</th>
	<th>Fakultas</th>
	<th>Semester</th>
	<th>Angkatan</th>
	<th>Opsi</th>
</tr>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from datamahasiswa order by Nim ASC");
		while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $d ['Nim']; ?></td>
		<td><?php echo $d ['Nama']; ?> </td>
		<td><?php echo $d ['Jurusan']; ?></td>
		<td><?php echo $d ['Fakultas']; ?></td>
		<td><?php echo $d ['Semester'];?></td>
		<td><?php echo $d ['Angkatan'];?></td>
      <td>
      	<a href="edit.php?id=<?php echo $d['ID']; ?>">Edit</a>  |  
	 <a href="hapus.php?id=<?php echo $d['ID']; ?>">Hapus</a>
     </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>