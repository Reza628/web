<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Contact Form #6</title>
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
                    <a class="nav-link px-3" href="../tiket/index.php">Event</a>
                    <a class="nav-link px-3" href="../login/logout.php">Keluar</a>

                </div>
            </div>
        </div>
    </header>

    <div class="content py-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">


                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <h3 class="heading mb-4">Let's talk about everything!</h3>

                            <p><img src="images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                        </div>
                        <div class="col-md-6">

                            <form class="mb-5" method="post" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-12 form-group py-1">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group py-1">
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group py-1">
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="7"
                                            placeholder="Write your message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" value="Send Message" name="btnSimpan"
                                            class="btn btn-primary rounded-0 py-2 px-4">
                                        <span class="submitting"></span>
                                    </div>
                                </div>
                            </form>

                            <div id="form-message-warning mt-4"></div>
                            <div id="form-message-success">
                                Your message was sent, thank you!
                                <br>
                                <a class="btn btn-primary" href="../index.php">Kembali</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php






  ?>

    <footer>
        <div class="main-footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <div class="mb-3">
                            <a href="index.html"><img src="../img/logo_unpam.png" alt=""></a>
                        </div>
                        <p>Universitas Pamulang<br> Jl. Surya Kencana No.1, Pamulang Bar., Kec. Pamulang, Kota Tangerang
                            Selatan, Banten 15417</p>
                        <p>Designed by me</p>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <h3 class="text-white">Kelompok</h3>
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
                        <h3 class="text-white">Kontak</h3>
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


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>