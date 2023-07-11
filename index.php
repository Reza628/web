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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav shadow-lg ">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="img/logo_unpam.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto py-3">
                    <a class="nav-link active px-3" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link px-3" href="info/info.php">Informasi</a>
                    <a class="nav-link px-3" href="feedback/index.php">feedback</a>
                    <a class="nav-link px-3" href="tiket/index.php">Event</a>
                    <a class="nav-link px-3" href="login/logout.php">Keluar</a>



                </div>
            </div>
        </div>
    </header>
    <section id="main-top">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 align-self-center text-center">
                    <div class="">
                        <h2>Ayo Lihat Event Terbaru Sistem Informasi</h2><br>
                        <p>Bergabunglah dengan kami dalam menjelajahi berbagai acara menarik yang berkaitan dengan
                            sistem informasi. Temukan informasi terkini tentang seminar, workshop, dan kegiatan lainnya
                            yang akan memberikan wawasan dan pengembangan di bidang ini.</p>
                        <button type="button" class="btn btn-warning btncoba"><a class="coba" href="tiket/index.php"
                                style="text-decoration: none; color:black;">Cek Sekarang</a></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="px-4 py-5">
                        <img src="img/unpam.jpg" class="px-4 py-5 w-100">
                    </div>
                </div>
            </div>

    </section>
    <section id="main-tols">
        <div class="container py-5">
            <h2 class="text-center">Tols Yang Kami Gunakan</h2><br>
            <p class="text-center">Kami dengan bangga memperkenalkan Anda pada berbagai tols yang kami gunakan dengan
                penuh keyakinan dalam setiap aktivitas kami. </p>
        </div>
        <div class="text-center py-1">
            <a href=""><img src="img/html" alt=""></a>
            <a href=""><img src="img/Bootstrap_logo.svg.png" alt=""></a>
            <a href=""><img src="img/css" alt=""></a>
            <a href=""><img src="img/javascript.png" alt=""></a>
            <a href=""><img src="img/jquery.png" alt=""></a>
            <a href=""><img src="img/xampp.png" alt=""></a>
            <a href=""><img src="img/php.png" alt=""></a>

        </div>
    </section>
    <section id="profile" class="py-5">
        <div class="container py-5">
            <h2 class="text-center">TEMUI PARA PENDIRI</h2><br>
            <p class="text-center">Mendorong Inovasi Pada Universitas Pamulang Prodi Sistem Informasi</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="team-member">
                        <img src="img/profile/fajar.jpg" alt="">
                        <h3>FAJAR RAMADHAN</h3>
                        <!-- <p>Co-Founder</p> -->
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="team-member">
                        <img src="img/profile/ALGI.jpg" alt="">
                        <h3>ALGI FIRMANSYAH</h3>
                        <!-- <p>Lead Designer</p> -->
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="team-member">
                        <img src="img/profile/FADIL.jpg" alt="">
                        <h3>MUHAMMAD FADHIL NUGRAHA</h3>
                        <!-- <p>Senior Developer</p> -->
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="team-member">
                        <img src="img/profile/AJI.jpg" alt="">
                        <h3>IKHSAN AJI LAKSONO</h3>
                        <!-- <p>Marketing Manager</p> -->
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="team-member">
                        <img src="img/profile/BINTANG.jpg" alt="">
                        <h3>BINTANG SAPUTRA</h3>
                        <!-- <p>Business Analyst</p> -->
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="team-member">
                        <img src="img/profile/REZA.jpg" alt="">
                        <h3>ANGKEU REYZA</h3>
                        <!-- <p>Project Manager</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="blog" class="main-grey">
        <div class="container text-center py-5">
            <h2>Postingan Terbaru</h2>
            <p>Solusi Untuk Negri</p>
        </div>
        <div class="row py-5">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="card">
                    <img src="img/UNPAM_BARU.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="konten/konten.html">SEJARAH UNPAM <br> <br></a></h5>
                        <p class="card-text">Universitas Pamulang didirikan pada tahun 2000 oleh Yayasan Prima Jaya yang
                            diketuai oleh Drs. Wayan.</p>
                        <button type="button" class="btn btn-secondary"><a href="konten/konten.html">Selengkapnya</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="card">
                    <img src="img/Macet.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="konten/konten2.html">Warga Tangsel Hindari Jalan Depan Kampus
                                Unpam Viktor Sabtu Pagi dan Sore</a></h5>
                        <p class="card-text">Buat Warga Tangsel yang kerap melewati Jalan Raya Puspitek, Buaran, pada
                            pagi dan sore hari diharapkan</p>
                        <button type="button" class="btn btn-secondary"><a href="konten/konten2.html">Selengkapnya</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="card">
                    <img src="img/6jxkfkgdv7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Propesa Unpam </a></h5>
                        <p class="card-text">Modi ut et delectus. Modi nobis saepe voluptates nostrum. Sed quod
                            consequatur quia provident dera</p>
                        <button type="button" class="btn btn-secondary"><a href="konten/konten3.html">Selengkapnya</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



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
    <script src="assets/bootstrap.bundle.min.js"></script>


</body>

</html>