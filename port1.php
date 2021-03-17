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
<body>


  <main id="main">

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container">
          <br>
          <a href="ana.php#portfolio">Voltar</a>
      <br>
      <br>
          <div class="section-title">
              <span>Ana Silva</span>
              <h2>Ana Silva</h2>
              <h2>Sessão de fografia dos bébes de Março</h2>
              <p>22.11.2020 | 9 fotografias</p>

          </div>



        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item">
              <a href="#" data-toggle="modal" data-target="#port1-1">
            <div class="portfolio-img"><img src="img/1.jpg" class="img-fluid" alt=""></div>
              </a>
          </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"><img src="img/2.jpg" class="img-fluid" alt=""></div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"><img src="img/3.jpg" class="img-fluid" alt=""></div>
            </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/4.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/5.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/6.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/7.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/9.jpg" class="img-fluid" alt=""></div>
          </div>




        </div>

      </div>
    </section><!-- End My Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Port ======= -->
  <div class="modal fade" id="port1-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <img width="320" src="img/1.jpg" class="post-img" alt="">
                          </div>
                          <div class="col-4" style="height: 200px;  overflow-y: scroll;"> <!-- alterar por PHP a altura da div (imagem) -->
                              <p class="text-justify p-2 bg-light">
                                  <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Acho lindo Amesterdão. As cores de lá são lindas.</small>
                              </p>
                              <p class="text-justify p-2 bg-light">
                                  <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Acho lindo Amesterdão. As cores de lá são lindas.</small>
                              </p>
                              <p class="text-justify p-2 bg-light">
                                  <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Acho lindo Amesterdão. As cores de lá são lindas.</small>
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
  <!-- End Port -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <script>
      function gosto() {
          document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
          document.getElementById("gostar").innerHTML = "23 gostos";
      }
  </script>
</body>
<?php
bottom();
?>