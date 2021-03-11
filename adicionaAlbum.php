<?php
include_once ("includes/body.inc.php");

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

<!-- ======= Header ======= -->
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center header-transparent">

    <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="post.php">Publicações</a></li>
            <li><a href="post.php">Atividade</a></li>
            <li><a>|</a> </li>
            <li><a href="ana.php">Perfil</a> </li>

        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span>Adicionar novo album</span>
                <h2>Adicionar novo album</h2>
            </div>
            <form action="confirmaNovoAlbum.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="1">

                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <small><input type="file" name="albumCapaURL"></small>

                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-4">
                                <br>
                                <ul>
                                    <li> <strong>Nome do album:</strong></li>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <ul>
                                    <small><input type="text" name="albumNome"></small>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <br>
                                <ul>
                                    <li> <strong>Data do album:</strong></li>
                                </ul>
                            </div>
                            <div class="col-lg-8">
                                <br>
                                <ul>
                                    <small><input type="date" name="albumData"></small>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12"  style="text-align: center">
                            <button type="Submit" class="btn btn-warning">Adiciona</button><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        </div>
    </section><!-- End About Me Section -->

</main><!-- End #main -->

