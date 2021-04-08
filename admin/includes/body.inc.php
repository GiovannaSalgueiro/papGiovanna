<?php
include_once("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$con->set_charset("utf8");
function top(){
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>BluPost</title>
            <meta charset='utf-8'>
            <meta content='width=device-width, initial-scale=1.0' name='viewport'>

            <meta content='' name='descriptison'>
            <meta content='' name='keywords'>
            <!-- Font awesome -->
            <script src='https://kit.fontawesome.com/e8e2985ace.js' crossorigin='anonymous'></script>
            <!-- Favicons -->
            <link href="assets/img/favico.png" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
            <!-- Vendor CSS Files -->
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
            <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
            <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
            <!-- Template Main CSS File -->
            <link href="assets/css/style.css" rel="stylesheet">
            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
        </head>
<body>
    <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="post.php">Publicações</a></li>
                <li><a href="criador.php">Fotografos</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </header><!-- End Header -->

    <?php
}
function top1(){
    ?>
    <head>
        <title>BluPost</title>
        <meta charset='utf-8'>
        <meta content='width=device-width, initial-scale=1.0' name='viewport'>

        <meta content='' name='descriptison'>
        <meta content='' name='keywords'>
        <!-- Font awesome -->
        <script src='https://kit.fontawesome.com/e8e2985ace.js' crossorigin='anonymous'></script>

        <!-- Favicons -->
        <link href='assets/img/favico.png' rel='icon'>
        <link href='assets/img/apple-touch-icon.png' rel='apple-touch-icon'>

        <!-- Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy' rel='stylesheet'>


        <!-- Vendor CSS Files -->
        <link href='assets/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        <link href='assets/vendor/icofont/icofont.min.css' rel='stylesheet'>
        <link href='assets/vendor/boxicons/css/boxicons.min.css' rel='stylesheet'>
        <link href='assets/vendor/owl.carousel/assets/owl.carousel.min.css' rel='stylesheet'>
        <link href='assets/vendor/venobox/venobox.css' rel='stylesheet'>

        <!-- Template Main CSS File -->
        <link href='assets/css/style.css' rel='stylesheet'>
    </head>
<body>
    <header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="post.php">Publicações</a></li>
                <li><a href="post.php">Atividade</a></li>
                <li><a>|</a> </li>
                <li><a href="perfil.php">Perfil</a> </li>

            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->
    <?php
}
function bottom(){
    ?>
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <h3>BluPost</h3>
        <p>Tirar uma foto, congelar um momento, revela o quão rica é a realidade.</p>
        <div class="copyright">
          &copy; Copyright <strong><span>Laura</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/counterup/counterup.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <?php
}
?>