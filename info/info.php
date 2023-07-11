<?php

session_start();
//koneksi ke database


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
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav shadow-lg ">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo_unpam.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto py-3">
                    <a class="nav-link active px-3" aria-current="page" href="../index.php">Home</a>
                    <a class="nav-link px-3" href="../feedback/index.php">feedback</a>
                    <a class="nav-link px-3" href="../tiket/index.php">Event</a>
                    <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

                </div>
            </div>
        </div>
    </header>
    <section class="riwayat py-5 px-5">
        <div class="container ">
            <h3>Riwayat Pemesanan <?php echo $_SESSION["users"]["username"] ?></h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Event</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                $id_user = $_SESSION["users"]["id_user"];
                $ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_user='$id_user'");

                while ($pecah = $ambil->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama"]; ?></td>
                        <td><?php echo $pecah["tanggal"]; ?></td>
                        <td><?php echo $pecah["status"]; ?></td>

                        <td>Rp. <?php echo number_format($pecah["total"]); ?></td>
                        <td>
                            <?php if ($pecah['status'] == "lunas") : ?>
                                <a href="tiket.php?id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">tiket</a>
                            <?php else : ?>
                                <a href="../tiket/bayar.php?id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-success">Pembayaran</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                <?php } ?>

            </tbody>
        </table>

    </section>


    <footer>

        <div class="main-footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="mb-3">
                            <a href="index.html"><img src="img/logo_unpam.png" alt=""></a>
                        </div>
                        <p>Universitas Pamulang<br> Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang
                            Selatan, Banten 15417</p>
                        <p>Designed by me</p>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <h3>Kelompok</h3>
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
</body>

</html>