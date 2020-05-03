<?php
//koneksi database
include 'koneksi.php';

//ambil data yg dikirim dari form 
$nim=$_POST['Nim'];
$nama=$_POST['Nama'];
$jurusan=$_POST['Jurusan'];
$fakultas=$_POST['Fakultas'];
$semester=$_POST['Semester'];
$angkatan=$_POST['Angkatan'];

mysqli_query($koneksi,"insert into datamahasiswa values('','$nim','$nama','$jurusan','$fakultas','$semester','$angkatan')");
//alih halaman ke utama
header("location:index.php");

?>
