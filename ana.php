<?php
include_once("includes/body.inc.php");


$sql="select * from fotografos inner join albuns on fotografoId=albumFotografoId where fotografoId=1" ;

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
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


<main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <span>Sobre mim</span>
                <h2>Sobre mim</h2>
            </div>

            <div class="row">
                <img src="<?php echo $dados['fotografoFotoURL']?>" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                <div class="col-lg-8 d-flex flex-column align-items-stretch">
                    <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                        <p id="favorito" onclick="favorito()"><i class="far fa-star fa-2x" aria-hidden="true" style="color: #ffb459"></i></p>
                        <small id="favoritar">seguir</small>
                        <div class="row">
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong><?php echo $dados['fotografoNome']?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong> <?php echo $dados['fotografoTelemovel']?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong> <?php echo $dados['fotografoCidade']?></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <ul>
                                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $dados['fotografoEmail']?></li>
                                    <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong><?php echo $dados['fotografoFreelancer']?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-n4">
                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-heart-alt" style="color:#FA5858;"></i>
                                    <span data-toggle="counter-up">25</span>
                                    <p><strong>Gostos</strong> Total de gostos</p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                                    <span data-toggle="counter-up">4</span>
                                    <p><strong>Projetos</strong> concluidos</p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                                    <span data-toggle="counter-up">0.5</span>
                                    <p><strong>Anos de experiencia </strong> </p>
                                </div>
                            </div>

                            <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-star" style="color: #ffb459;"></i>
                                    <span data-toggle="counter-up">4</span>
                                    <p><strong>Recomendado</strong> Pessoas que gostaram do meu trabalho e recomendam.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                    <br>

                </div>
            </div>

        </div>
    </section><!-- End About Me Section -->


    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <span>Meu Portfolio</span>
                <h2>Meu Portfolio</h2>
                <p>Conheça o meu trabalho.</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center">
                <li class="filter-active">Todos</li>
                <a href="portfolio.php?id=7&ano=2020"><li >2020</li></a>
                <li >2019</li>

                <li >2018</li>
            </ul>
            <?php
            $sql = "select * from albuns where albumFotografoId=1";
            $resultAlbuns = mysqli_query($con, $sql);
            ?>
            <div class="row portfolio-container">
                <!-- app=            card=2019               web=2020-->

                <?php
                while ($dadosAlbuns = mysqli_fetch_array($resultAlbuns)) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="<?php echo $dadosAlbuns['albumCapaURL']?>"  class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4><?php echo $dadosAlbuns['albumNome']?></h4>
                            <p><?php echo $dadosAlbuns['albumData']?></p>
                            <a href="album.php?id=<?php echo $dados['albumId']?>"><i class="fas fa-plus" style="color: #ffb727"></i></a>
                            <a href="editaAlbum.php"><i class="far fa-edit"></i></a>
                            <input type="checkbox">
                        </div>
                    </div>
                    <?php

                }
                ?>



            </div>

        </div>
    </section><!-- End My Portfolio Section -->




</main><!-- End #main -->
<!-- ======= Login======= -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputEmail">Email:</label>
                        <input type="email" class="form-control" id="InputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Palavra-passe:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        <small id="emailHelp1" class="form-text text-muted">Nunca compartilhe a sua palavra-passe com mais ninguém.              </small>

                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Manter-me logado</label>
                    </div>
                    <h8>Ainda não tem conta?</h8>
                    <a href="#" onclick="fecha()" data-toggle="modal" data-target="#regista"><button type="submit" class="btn btn-outline-warning">Registar</button></a>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-warning">Submeter</button>
            </div>
        </div>
    </div>
</div>
<!--End Login -->

<!-- ======= Registar======= -->
<div class="modal fade" id="regista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="InputName">Nome:</label>
                        <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email:</label>
                        <input type="email" class="form-control" id="InputEmail">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Palavra-passe</label>
                        <input type="password" class="form-control" id="InputPassword1">
                        <label for="InputPassword1">Confirmar Palavra-passe</label>
                        <input type="password" class="form-control" id="InputPassword2">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartilhe a sua palavra-passe com mais ninguém.</small>
                    </div>
                    <!-- <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">criador de conteudo</label>
                    </div> -->



                    <!-- <a href="criador.html"><small class="form-text text-muted">Criar conta como criador de conteudo</small></a> -->
                </form>
                <br>
                <button id="regist"><small class="form-text text-muted">Criar conta como criador de conteudo</small></button>
                <br>
                <p id="abrir" class="col-md-12">

                    <label for="inputEmail4" class="form-label">Telemovel</label>
                    <input type="email" class="form-control" id="inputEmail4">
                    <label for="inputCity" class="form-label">Localidade</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Maceira, Leiria">
                    <label for="inputAddress2" class="form-label">Website</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="www.example.com"><br>
                    <label for="inputState" class="form-label">Freenlace</label>
                    <select id="inputState" class="form-select">
                        <option selected>Disponivel</option>
                        <option>Não disponivel</option>
                    </select>
                </p>
                <div>
                    <h8>Já tem conta?</h8>
                    <a href="#" onclick="fecha()" data-toggle="modal" data-target="#login"><button type="submit" class="btn btn-outline-warning">Login</button></a>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-warning">Submeter</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Registar -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script>
    function fecha(){
        $('#regista').modal('toggle');
        $('#login').modal('toggle');
    }

</script>
<script>
    function favorito() {
        document.getElementById("favorito").innerHTML = "<i class=\"fas fa-star fa-2x\" style='color: #ffb459'></i>";
        document.getElementById("favoritar").innerHTML = "deixar de seguir";
    }
</script>

</body>
<?php
bottom();

?>
