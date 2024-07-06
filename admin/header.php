<?php
// include 'head.php';
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>location.href='login.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
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

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- <link type="text/css" href="css/jquery.toastmessage.css" rel="stylesheet"/> -->



    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css"> -->

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/style.css">

	
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
                        <li><a href="user.php">Data Siswa</a></li>
                            <li><a href="alternatif.php">Data Alternatif</a></li>
                            <li><a href="kriteria.php">Kriteria</a></li>
                            <li><a href="bobot.php">Bobot</a></li>
                            <!-- <li><a href="bobot.php">Data Bobot</a></li> -->
                            <!-- <li><a href="grafik.php">grafik</a></li> -->

                            <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li class="hidden"><a href="#">Something else here</a></li>
                          
                            </ul>
                          </li> -->
                            <!-- <li><a href="laporan.php">laporan</a></li>
                            <li><a href="rangking.php">hasil</a></li>
							 -->
                            <li class="main-button"><a href="../logout.php">Logout</a></li>
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

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script> 
    <script src="../assets/js/mixitup.js"></script> 
    <script src="../assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

  </body>
	<div class="container">

</html>