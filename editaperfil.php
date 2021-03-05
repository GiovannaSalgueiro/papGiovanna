<?php
include_once ("includes/body.inc.php");

$id=1;
$sql="select * from fotografos where fotografoId=1";
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
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
                <span>Editar o perfil</span>
                <h2>Editar o perfil</h2>
            </div>
            <form action="confirmaeditaperfil.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="1">
            <div class="row">
                <img src="imagens/me.jpg" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">

                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <small><input type="file" name="fotoFotografo" src="../<?php echo $dados['fotografoFotoURL']?>"></small> <!-- Nao esta a ir buscar -->
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-lg-3">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong></li><br>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong><br>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <br>
                                <ul>
                                    <li><small><input type="text" name="nomeFotografo" value="<?php echo $dados['fotografoNome']?>"></small></li><br>
                                    <li><small><input type="text" name="numeroFotografo" value="<?php echo $dados['fotografoTelemovel']?>"></small></li><br>
                                    <li><small><input type="text" name="cidadeFotografo" value="<?php echo $dados['fotografoCidade']?>"></small></li><br>
                                    <li><small><input type="text" name="emailFotografo" value="<?php echo $dados['fotografoEmail']?>"></small></li><br>
                                    <li><small><input type="radio" id="disponivel" name="freelance" value="disponivel">
                                        <label for="disponivel">Disponivel</label>
                                        <input type="radio" id="female" name="freelance" value="indisponivel">
                                        <label for="indisponivel">Indisponivel</label><br></small></li>
                                </ul>
                            </div>

                            <div class="col-lg-12"  style="text-align: center">
                                <button type="Submit" class="btn btn-warning">Edita</button><br>
                            </div>

                            </div>


                        </div>

                    </div><!-- End .content-->
                    <br>

                </div>
            </form>
            </div>

        </div>
    </section><!-- End About Me Section -->

</main><!-- End #main -->



<!-- ======= Adiciona======= -->
<div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adiciona Galeria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputName">Nome:</label>
                        <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Ana Silva">
                    </div>
                    <div class="form-group">
                        <label for="InputName">Data:</label>
                        <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="20.05.2019">
                    </div>

                    <label>Foto de capa</label>
                    <input type="file" name="logoEmpresa">
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Adiciona</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Adiciona -->



<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom();
?>
