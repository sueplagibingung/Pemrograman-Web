<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$level = $_POST['level'];
$password = $_POST['password'];

$query = "INSERT INTO mahasiswa SET nim = '$nim',nama = '$nama',jurusan = '$jurusan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat',level = 'user',password='$password'";
mysqli_query($koneksi,$query);
header("location:index.php");
?>