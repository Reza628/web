<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>
