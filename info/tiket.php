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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar Ticket</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="../assets/style.css">
    <style>
    .ticket {
        background-color: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        width: 400px;
        margin: 0 auto;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .event-details {
        text-align: left;
        margin-bottom: 20px;
    }

    .event-details p {
        margin: 5px 0;
    }

    .ticket-footer {
        font-size: 14px;
        color: #888;
    }

    .download-link {
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <header class="navbar sticky-top navbar-expand-lg navbar-dark main-nav shadow-lg ">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo_unpam.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto py-3">
                    <a class="nav-link active px-3" aria-current="page" href="../index.php">Home</a>
                    <a class="nav-link px-3" href="konten/isi.html">Konten</a>
                    <a class="nav-link px-3" href="../info/info.php">Informasi</a>
                    <a class="nav-link px-3" href="../feedback/index.php">feedback</a>
                    <a class="nav-link px-3" href="../tiket/index.php">Event</a>
                    <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

                </div>
            </div>
        </div>
    </header>
    <div class="ticket">
        <h1>TIKET</h1>
        <?php
        $id_pembelian = $_GET['id'];
        $ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian'");
        $pecah = $ambil->fetch_assoc();
        ?>
        <div class="event-details">
            <p><strong>ID:</strong> <?php echo $pecah['id_pembelian']; ?></p>
            <p><strong>Location:</strong> Universitas Pamulang</p>
            <p><strong>Name:</strong> <?php echo $_SESSION["users"]["username"]; ?></p>
        </div>
        <p>Thank you for registering!</p>
        <p>Please present this ticket at the event entrance.</p>
        <p>Have a great seminar!</p>
        <div class="ticket-footer">
            <p>Event ID: SEM2023</p>
            <p>Website: www.unpam.com</p>
        </div>
        <div class="download-link">
            <a href="download_ticket.php?id=<?php echo $pecah['id_pembelian']; ?>" download>Download Ticket</a>
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
</body>

</html>