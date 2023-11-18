<?php
include 'koneksi.php';
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$password = $_POST['password'];

// Query ke database
$query = "SELECT * FROM mahasiswa WHERE nama='$nama' AND password='$password'";
$result = $koneksi->query($query);

// Periksa apakah ada data yang cocok
if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $level = $row['level'];
    if($level=='admin'){
        header('location:index-admin.php');
    }else{        
        header('location:index-user.php');
    }
} 
else {
    echo "Login gagal. Username atau password salah.";
}
?>