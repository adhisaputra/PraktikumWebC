<?php
include 'koneksi.php';

// tangkap data yg dikirm dari form
$id = $_POST ['ID'];
$nim=$_POST['Nim'];
$nama=$_POST['Nama'];
$jurusan=$_POST['Jurusan'];
$fakultas=$_POST['Fakultas'];
$semester=$_POST['Semester'];
$angkatan=$_POST['Angkatan'];

//update data ke database 

mysqli_query($koneksi,"update datamahasiswa set Nim='$nim', Nama='$nama', Jurusan='$jurusan', Fakultas='$fakultas', Semester='$semester', Angkatan='$angkatan' where ID='$id'");

//kembali ke index.php

header ("location:index.php");

?>