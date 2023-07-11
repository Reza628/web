<?php
// Konfigurasi database
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

// Mengambil data dari form register
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query ke database untuk memeriksa apakah username sudah digunakan
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $koneksi->query($query);

// Memeriksa hasil query
if ($result->num_rows > 0) {
    // Username sudah digunakan
    echo "Username sudah digunakan. Silakan pilih username lain.";

} else {
    // Username belum digunakan, lanjutkan proses registrasi
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($koneksi->query($query) === TRUE) {
        echo '<script>alert("Registrasi Berhasil"); window.location.href = "login.php";</script>';
    } else {
        echo "<script>alert('Registrasi gagal: " . $koneksi->error . "');</script>";
    }
}


// Menutup koneksi ke database
$koneksi->close();
?>
