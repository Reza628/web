<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // lakukan kuery ngecek akun di tabel pelanggan di db 
    $ambil = $koneksi->query("SELECT * FROM users WHERE username= '$username' AND password= '$password'");
    // ngitung akun yg terambil 
    $akunyangcocok = $ambil->num_rows;
    // jika 1 akun yang cocok, maka diloginkan 
    if ($akunyangcocok == 1) {
        // mendapatkan akun dlm bentuk array 
        $akun = $ambil->fetch_assoc();
        // simpan di session pelanggan
        $_SESSION["users"] = $akun;
        echo "<script>alert('anda sukses login');</script>";
        echo "<script>location='../index.php';</script>";
    } else {
        // anda gagal login
        echo "<script>alert('anda gagal login, periksa akun Anda');</script>";
    }
}
