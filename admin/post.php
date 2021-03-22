<?php
include_once("../includes/body.inc.php");


$sql="Select * 
        from fotos inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoId=albumFotografoId 
        ";
$result = mysqli_query($con, $sql);
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
</head>
<body>
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
<main id="main">

    <!-- ======= Posts ======= -->
    <section id="services1" class="services">

        <div class="section-title">
            <span>Publicações</span>
            <h2>Publicações</h2>
        </div>


        <div class="container">

            <table class="table table-hover table-striped">
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <th>Id</th>
                    <th> Criador</th>
                    <th> Fotografia</th>
                    <th> Album da fotografia</th>
                    <th> Nº de gostos</th>
                    <th> Comentários</th>
                    <th colspan="3"> Opções </th>
                </tr>
                <tr>
                    <td><?php echo $dados['fotoId']?></td>
                    <td><a href="criador.php?id=<?php echo $dados['fotografoId']?>"><?php echo $dados['fotografoNome']?></td></a>
                    <td><img src="<?php echo $dados['fotoURL']?>" width="102"> </td>
                    <td style="text-align: center"><a href="album.php?id=<?php echo $dados['albumId']?>" ><i class="fas fa-images" style="color: #ffb727"></i>&nbsp;<?php echo $dados['albumNome']?></td></a>
                    <td>10 gostos</td>
                    <td><a href="#" data-toggle="modal" data-target="#top1"><span class="btn-sm btn-success">Ver comentários</span></a></td>
                    <td><span class="btn-sm btn-warning"><i class="fas fa-bell"></i> &nbsp;Aviso</span></td>
                    <td><span class="btn-sm btn-danger">Elimina</span></td>
                </tr>
                    <?php
                }
                ?>
            </table>
            <br>
        </div>

    </section>
</main><!-- End #main -->
<!-- ======= Post ======= -->
<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th colspan="12">Comentarios</th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>

                    </table>

                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="post1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <a href="ana.html"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;Ana Silva</h7></a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">

                    <img width="320" src="img/1.jpg" class="post-img" alt="">

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Comentarios</th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>
                        <tr>
                            <th><small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente à minha casa...</small></th>
                            <th><i class="fas fa-trash-alt"></i></th>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Post -->

</body>

<?php
bottom();

?>
