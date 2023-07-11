<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

if (!isset($_SESSION["users"])) {
    echo "<script>alert('Silakan login terlebih dahulu');</script>";
    echo "<script>location='login.php';</script>";
    exit; // Stop executing the script if the user is not logged in
}
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
                    <a class="nav-link px-3" href="../info/info.php">Informasi</a>
                    <a class="nav-link px-3" href="../feedback/index.php">feedback</a>
                    <a class="nav-link px-3" href="../tiket/index.php">Event</a>
                    <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

                </div>
            </div>
        </div>
    </header>


    <section class="konten py-5">
        <div class="container py-5">
            <h1>Detail Pemesanan</h1>
            <hr>
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Event</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($_SESSION["form_beli"] as $id_item => $jumlah) {
                        $query = "SELECT * FROM acara WHERE id = '$id_item'";
                        $result = $koneksi->query($query);
                        $pecah = $result->fetch_assoc();
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama"]; ?></td>
                        <td><?php echo $pecah["harga"]; ?></td>
                    </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
            <form method="POST">
                <input type="hidden" name="harga" value="<?php echo $pecah['harga']; ?>">
                <button class="btn btn-primary " type="submit" name="bayar">Bayar</button>
            </form>

            <?php
            if (isset($_POST['bayar'])) {
                $id_user = $_SESSION["users"]["id_user"];
                $tanggal = date("Y-m-d");
                $harga = $pecah["harga"];
                $status = 'Belum Bayar';
                $nama = $pecah["nama"];


                $koneksi->query("INSERT INTO pembelian (id_user, tanggal, total, status,nama) VALUES ('$id_user', '$tanggal', '$harga' , '$status' ,'$nama')");
                unset($_SESSION["form_beli"]);
                $id_pembelian = $koneksi->insert_id;
                header("Location: bayar.php?id=" . $id_pembelian);
                exit;
            }
            ?>


        </div>
    </section>




    <footer>
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

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>

</html>