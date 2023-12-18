<?php
$servername = "localhost";
$username = "james"; // Ganti dengan nama pengguna yang benar
$password = "mes2023"; // Ganti dengan kata sandi yang benar
$dbname = "login"; // Ganti dengan nama database yang benar

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
