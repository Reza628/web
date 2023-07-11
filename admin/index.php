<?php
session_start();

// Memeriksa apakah pengguna sudah terautentikasi
if (!isset($_SESSION['admin'])) {
    // Jika pengguna belum terautentikasi, arahkan ke halaman login
    header("Location: ../login/login.php");
    exit;
}
?>

<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'users';

// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $password, $database);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> &nbsp; <a
                    href="../login/logout.php" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="../img/logo_unpam.png" class="user-image img-responsive"
                            style="border-radius: 50%;" />
                    </li>


                    <li> <a class="active-menu" href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li> <a class="active-menu" href="index.php?halaman=acara"><i class="fa fa-dashboard fa-3x"></i>
                            acara</a></li>
                    <li> <a class="active-menu" href="index.php?halaman=akun"><i class="fa fa-dashboard fa-3x"></i>
                            Daftar Akun</a></li>
                    <li> <a class="active-menu" href="index.php?halaman=pembelian"><i class="fa fa-dashboard fa-3x"></i>
                            Pembelian</a></li>
                    <li> <a class="active-menu" href="index.php?halaman=feedback"><i class="fa fa-dashboard fa-3x"></i>
                            Feedback</a></li>
                    <li> <a class="active-menu" href="../login/logout.php"><i class="fa fa-dashboard fa-3x"></i>
                            Keluar</a></li>




                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {

                    if ($_GET['halaman'] == "acara") {
                        include 'acara.php';
                    } elseif ($_GET['halaman'] == "akun") {
                        include 'akun.php';
                    } elseif ($_GET['halaman'] == "pembelian") {
                        include 'pembelian.php';
                    } elseif ($_GET['halaman'] == "tambahacara") {
                        include 'tambahacara.php';
                    } elseif ($_GET['halaman'] == "hapusacara") {
                        include 'hapusacara.php';
                    } elseif ($_GET['halaman'] == "hapusakun") {
                        include 'hapusakun.php';
                    } elseif ($_GET['halaman'] == "feedback") {
                        include 'feedback.php';
                    } elseif ($_GET['halaman'] == "hapusfeedback") {
                        include 'hapusfeedback.php';
                    } elseif ($_GET['halaman'] == "pembayaran") {
                        include 'pembayaran.php';
                    }
                } else {
                    include 'home.php';
                }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>