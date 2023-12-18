<?php
include 'koneksi.php';

// Pastikan ada data yang dikirimkan melalui metode POST sebelum mengaksesnya
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "james", "mes2023", "login");

    // Periksa koneksi
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    // Prepared statement untuk menghindari SQL injection
    $query = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    // Eksekusi prepared statement
    mysqli_stmt_execute($stmt);

    // Ambil hasil query
    $result = mysqli_stmt_get_result($stmt);

    // Hitung jumlah baris yang cocok
    $sama = mysqli_num_rows($result);

    // Periksa apakah ada hasil yang cocok
    if ($sama > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header('location:gradetify-home-page.html');
    } 
    
        // Tutup statement dan koneksi database
        mysqli_stmt_close($stmt);
        mysqli_close($koneksi);
    } else {
        // Jika tidak ada data POST yang dikirimkan, kembalikan ke halaman login
        header("location:gradetify-login-page.php");
        

}
?>
