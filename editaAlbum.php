<?php

include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from albuns where albumId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

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

<section id="topPost" class="services">
    <div class="container">
        <div class="section-title">
            <span>Editar albuns</span>
            <h2>Editar albuns</h2>
        </div>
        <form action="confirmaEditaAlbum.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="row">
                <img src="<?php echo $dados['albumCapaURL']?>" width="102" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">


            <div class="col-lg-8 d-flex flex-column align-items-stretch">
                <small><input type="file" name="capaAlbum"></small>
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
                                <small><input type="text" name="nomeAlbum" value="<?php echo $dados['albumNome']?>"></small>
                            </ul>
                        </div>

                        <div class="col-lg-12"  style="text-align: center">
                            <button type="Submit" class="btn btn-warning">Edita</button><br>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </form>
        <br>
    </div>
</section>
