<?php
require 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM akun WHERE username=? AND password=?";
$stmt = mysqli_prepare($koneksi, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role']; 
        if ($_SESSION['role'] === 'pelanggan') {
            header("location: index.php");
        } else if ($_SESSION['role'] === 'admin') {
            header("location: index.php");
        } else {
            $error = "Peran tidak valid.";
        }
    } else {
        $error = "Username atau password salah atau Anda bukan pengguna biasa (user).";
    }
    mysqli_stmt_close($stmt);
} else {
    $error = "Terjadi kesalahan dalam persiapan pernyataan SQL.";
}

}
