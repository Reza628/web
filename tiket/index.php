<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$koneksi = new mysqli($host, $user, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>


<?php
session_start();

// Memeriksa apakah pengguna sudah terautentikasi
if (!isset($_SESSION['users'])) {
    // Jika pengguna belum terautentikasi, arahkan ke halaman login
    header("Location: login/login.php");
    exit;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web</title>
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
                    <a class="nav-link px-3" href="../info/info.php">Informasi</a>
                    <a class="nav-link px-3" href="../feedback/index.php">feedback</a>
                    <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

                </div>
            </div>
        </div>
    </header>
    <div class='container-fluid py-5'>
        <div class="card mx-auto col-md-3 col-10 mt-5">
            <?php $ambil = $koneksi->query("SELECT * FROM acara"); ?>
            <?php while ($peritem = $ambil->fetch_assoc()) { ?>
                <img class='mx-auto img-thumbnail' src="../admin/img/<?php echo $peritem['foto'] ?>" width="700px" height="900px" />
                <div class="card-body text-center mx-auto py-5">
                    <div class='cvp'>
                        <h5 class="card-title font-weight-bold"><?php echo $peritem['nama'] ?></h5>
                        <p class="card-text">Rp <?php echo $peritem['harga'] ?></p>
                        <a href="#" class="btn details px-auto">view details</a><br />
                        <a href="beli.php?id=<?php echo $peritem['id'] ?>" name="beli" class="btn cart px-auto">Beli</a>
                    </div>

                </div>
                <hr style="height:5px;border-width:0;color:gray;background-color:gray">

            <?php } ?>
        </div>
    </div>

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


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>