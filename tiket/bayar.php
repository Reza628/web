<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

if (!isset($_SESSION["users"])) {
    echo "<script>alert('Silakan login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
    exit;
}

$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../img/logo_unpam.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto py-3">
                <a class="nav-link active px-3" aria-current="page" href="../index.php">Home</a>
                <a class="nav-link px-3" href="../info/info.php">Informasi</a>
                <a class="nav-link px-3" href="../feedback/index.php">feedback</a>
                <a class="nav-link px-3" href="../tiket/index.php">Event</a>
                <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

            </div>
        </div>
    </div>
</header>
<div class="container py-5">
    <h2>Konfirmasi Pembayaran</h2>
    <p>kirim bukti pembayaran Anda disini</p>
    <div class="alert alert-info">total tagihan Anda<strong>Rp.<?php echo number_format($detpem["total"]) ?><br>Kirim
            kerekening BCA : 5875461661</strong>
    </div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama </label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah" min="1">
        </div>
        <div class="form-group">
            <label>Foto Bukti</label>
            <input type="file" class="form-control" name="bukti">
            <p class="text-danger">foto bukti harus JPG maksimal 2MB</p>
        </div>
        <button class="btn btn-primary" name="kirim">Kirim</button>
    </form>
</div>

<?php
if (isset($_POST["kirim"])) {
    $namabukti = $_FILES["bukti"]["name"];
    $lokasibukti = $_FILES["bukti"]["tmp_name"];
    $namafiks = date("YmdHis") . $namabukti;
    move_uploaded_file($lokasibukti, "bukti/$namafiks");

    $nama = $_POST["nama"];
    $jumlah = $_POST["jumlah"];
    $tanggal = date("Y-m-d");

    $koneksi->query("INSERT INTO pembayaran (id_pembelian, nama, jumlah, tanggal, bukti) VALUES ('$idpem', '$nama', '$jumlah', '$tanggal', '$namafiks')");

    $koneksi->query("UPDATE pembelian SET status = 'sudah kirim pembayaran' WHERE id_pembelian='$idpem'");
    echo "<script> alert('terimakasih sudah mengirimkan bukti pembayaran');</script>";
    echo "<script> location='../info/info.php';</script>";
}
?>

<footer class="py-5">
    <div class="main-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="mb-3">
                        <a href="../index.php"><img src="../img/logo_unpam.png" alt=""></a>
                    </div>
                    <p>Universitas Pamulang<br> Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang
                        Selatan, Banten 15417</p>
                    <p>Designed by me</p>
                </div>
                <div class="col-lg-4 mb-3">
                    <h3 class="color-white">Kelompok</h3>
                    <ul>
                        <li>ANGKEU REYZA</li>
                        <li>IKHSAN AJI LAKSONO</li>
                        <li>ALGI FIRMANSYAH</li>
                        <li>MUHAMMAD FADHIL NUGRAHA</li>
                        <li>BINTANG SAPUTRA</li>
                        <li>FAJAR RAMADHAN</li>

                    </ul>
                </div>
                <div class="col-lg-4 mb-3">
                    <h3>Kontak</h3>
                    <ul>
                        <li>Email : info@unpam.ac.id </li>
                        <li>Instagram : UniversitasPamulang</li>
                        <li>Facebook : Universitas Pamulang</li>
                        <li>Telefon : 021-741-2566</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-5 main-copy">
        &copy; 2023 Remaja Jumpo All rights reserved.
    </div>
</footer>