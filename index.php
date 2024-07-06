<?php
    session_start();

    if(isset($_SESSION['level']))
    {
        header('location:index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>SPK Metode Weight Product</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.php" class="logo">SPK<em> WP</em></a>

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#call-to-action">Tentang</a></li>
                            <li class="main-button"><a href="login.php">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <img src="assets/images/sekolah.jpg" width="100%" height="90%">

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Pemilihan Jurusan SMK Teknologi Lengayang Menggunakan</h6>
                <h2>Metode <em>Weight Product</em></h2>
                <div class="main-button scroll-to-section">
                    <!-- <a href="login.php">Login</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>SMK <em>Teknologi</em> Lengayang</h2>
                        <p>SMK Teknologi Lengayang merupakan suatu yayasan yang di dirikan oleh 
                        bapak “yusma joyo “Berlokasi di jl. Ujung padang kambang, Kecamatan 
                        Lengayang kabupaten pesisir selatan Sumatera Barat</p>
                        <p>VISI
                            <br>
                            SMK Teknologi Lengayang mempunyai visi sebagai berikut:
                            <br>
                            Di harapkan tamatan memiliki skill kreatif, kompetitif, profesional 
                            mandiri, dan berkarakter (Berakhlak luhur) dan memiliki jiwa 
                            wirausahawan.
                        </p>
                        <p> MISI
                            <br>
                            SMK Teknologi Lengayang mempunyai misi sebagai berikut :
                            <br>
                            1. Menciptakan generasi yang terdidik dengan skill yang baik. <br>
                            2. Menciptakan generasi yang kreatif. <br>
                            3. Menciptakan generasi yang profesional di bidangnya. <br>
                            4. Menciptakan sekolah yang teladan minimal di lingkungannya. <br>
                            5. Menciptakan tamatan yang mandiri dan berkarakter. <br>
                            6. Menciptakan generasi yang berjiwa berwirausahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2022 SMK Teknologi Lengayang</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>