<?php
include_once ("config.inc.php");
session_start();
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
    <link href='imagens/favico.png' rel='icon'>
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

    <!-- =======================================================
    * Template Name: Laura - v2.1.0
    * Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/common.js"></script>

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
            <!--   <li><a href="#services">Top Posts</a></li>  -->
            <li><a href="post.php">Publicações</a></li>
            <li><a href="atividade.php">Atividade</a></li>
            <li><a>|</a> </li>
            <?php
                if(!isset($_SESSION['id'])){
            ?>
            <li><a href="#" data-toggle="modal" data-target="#login">Login</a> </li>



            <li><a href="#" data-toggle="modal" data-target="#regista">Registar</a>&nbsp;</li>
            <?php
                }else{
                    ?>

                     <li><a href="conta.php?id=<?php echo $_SESSION['id']?>"><?php echo $_SESSION['nome']?></a></li>
                     <li><span class="notif">3</span></li>
                     <li><a href="logout.php">Logout</a></li>
                    <?php
                }
 ?>

        </ul>
    </nav><!-- .nav-menu -->


</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <h1>BluPost</h1>
        <h2>Unidos pela fotografia</h2>
        <a href="#services" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
        <h5 style="padding-top: 5%">O nosso objetivo é ajudar fotógrafos amadores que acabam por não ter o conhecimento que merecem.</h5>
    </div>


</section><!-- End Hero -->

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
        <link href='imagens/favico.png' rel='icon'>
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
            <li><a href="atividade.php">Atividade</a></li>
            <li><a>|</a> </li>
            <?php
                if(!isset($_SESSION['id'])){
            ?>
            <li><a href="#" data-toggle="modal" data-target="#login">Login</a> </li>



            <li><a href="#" data-toggle="modal" data-target="#regista">Registar</a>&nbsp;</li>
            <?php
                }else{
                    ?>
                     <li><a href="conta.php?id=<?php echo $_SESSION['id']?>"><?php echo $_SESSION['nome']?></a> </li>
                     <li><a href="logout.php">Logout</a></li>
                    <?php
                }
 ?>

        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->
<?php
}
function bottom(){

    if(HOME){
    ?>
<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
</div>

    <!-- End Top -->
<?php
    }

?>


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

    <!-- ======= Editar conta======= -->
    <div class="modal fade" id="perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Perfil</h5>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Editar perfil</button>
                </div>
            </div>
        </div>
    </div>
    <!--End Login -->

    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Us a Message</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send Email</button>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="js/common.js"></script>

    </body>

    </html>

    <?php
}
?>