<?php
include_once("includes/body.inc.php");


?>
<head>
    <title>BluPost</title>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>

    <meta content='' name='descriptison'>
    <meta content='' name='keywords'>
    <script>
        $(document).ready(function(){
            $("#abrir").toggle(1000, function(){
            });
            $("#regist").click(function(){

                $("#abrir").toggle(1000, function(){
                });
            });
        });
    </script>

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

<!-- ======= Header ======= -->
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">
    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="index.php">Início</a></li>
            <li><a href="post.php">Publicações</a></li>
            <li><a href="post.php">Atividade</a></li>
            <li><a>|</a> </li>
            <li><a href="#" data-toggle="modal" data-target="#perfil">Perfil</a></li>

        </ul>
    </nav><!-- .nav-menu -->


</header><!-- End Header -->


<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services" class="services">
        <div class="container">


            <div class="section-title">
                <span>Publicações</span>
                <h2>Publicações</h2>
            </div>
            <small>Pesquisar:</small><br><input type="text" id="search">
            <div class="row">

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <a href="#" data-toggle="modal" data-target="#post1">
                            <img width="320" src="assets/img/portfolio/port-1.jpg" class="post-img" alt="">
                        </a>
                        <div class="portfolio-info">
                            <h4 class="title">15 gostos</h4>




                            <a href="assets/img/portfolio/port-1.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                    </div>
                </div>
                <!--
                          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img"><img src="img/principal2.jpg" class="img-fluid" alt=""></div>
                            <div class="portfolio-info">
                              <h4>Pandora</h4>
                              <p>14.05.2019</p>
                              <a href="port3.html"><i class="bx bx-plus"></i></a>
                            </div>
                          </div>           -->




                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <img width="320" src="assets/img/portfolio/port-2.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">5 gostos</h4>
                            <a href="assets/img/portfolio/port-2.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                        <img width="320" src="img/7.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">27 gostos</h4>
                            <a href="img/7.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <img width="320" src="assets/img/portfolio/portfolio-2.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">31 gostos</h4>
                            <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                        <img width="320" src="assets/img/portfolio/port-3.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">13 gostos</h4>
                            <a href="assets/img/portfolio/port-3.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <img width="320" src="assets/img/portfolio/port-4.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">58 gostos</h4>
                            <a href="assets/img/portfolio/port-4.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>

                        </div>
                        <img width="320" src="img/5.jpg" class="post-img" alt="">
                        <h4 class="title">6 gostos</h4>
                        <a href="img/5.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                            <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <div class="portfolio-info">
                            <img width="320" src="assets/img/portfolio/portfolio-6.jpg" class="post-img" alt="">
                            <div class="portfolio-info">
                                <h4 class="title">34 gostos</h4>
                                <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                    <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                        <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                    </svg></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="post-box">
                        <img width="320" src="img/principal2.jpg" class="post-img" alt="">
                        <div class="portfolio-info">
                            <h4 class="title">2 gostos</h4>
                            <a href="img/principal2.jpg" data-gall="portfolioGallery" class="venobox preview-link">
                                <svg color="#4F4F4F" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                                    <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
                                </svg></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
</main><!-- End #main -->

<!-- ======= Post ======= -->

<div class="modal fade" id="post1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <a href="ana.php"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;Ana Silva</h7></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-8">
                            <img width="320" src="assets/img/portfolio/port-1.jpg" class="post-img" alt="">
                        </div>
                        <div class="col-4" style="height: 400px;  overflow-y: scroll;"> <!-- alterar por PHP a altura da div (imagem) -->
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>
                            <p class="text-justify p-2 bg-light">
                                <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small>
                            </p>

                        </div>
                    </div>
                    <div class="container text-center">
                        <span id="gosto" onclick="gosto()" align="left"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        <small id="gostar" style="text-align: center"> 22 gostos</small>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>




<!-- End Post -->

<!-- ======= PERFIL ======= -->
<div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="perfil.php"><h5 class="modal-title" id="exampleModalLabel">Perfil</h5></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">Nome de Utilizador:</label>
                        <input type="email" class="form-control" id="InputNomUti" placeholder="anaSilva1">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email:</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="anaSilva@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********">

                    </div>

                </form>
                <small><button type="submit" class="btn btn-warning">Editar</button></small>
            </div>

            <div class="modal-footer">
                <h7>Sair da conta</h7>
                <i class="fas fa-sign-out-alt" style="color: #ffb727"></i>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->


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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    function fecha(){
        $('#regista').modal('toggle');
        $('#login').modal('toggle');
    }

</script>
<script>
    function gosto() {
        document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
        document.getElementById("gostar").innerHTML = "23 gostos";
    }
</script>>

</body>
<?php
bottom(HOME);

?>
