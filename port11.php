<?php
include_once("includes/body.inc.php");


?>
<head>
    <title>BluPost</title>
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

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
          <br>
          <div class="content pl-lg-4 d-flex flex-column justify-content-center">

                    <i class="fas fa-trash-alt" style="color: #ffb459; text-align: right"></i>
              <br>
              <a href="#" data-toggle="modal" data-target="#adiciona"><i class="fas fa-plus" style="color: #ffb459; text-align: right"></i></a>

          </div>
      <br>
      <br>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item">
              <a href="#" data-toggle="modal" data-target="#port1-1">
            <div class="portfolio-img"><img src="img/1.jpg" class="img-fluid" alt=""></div>
              </a>
              <input type="checkbox">
          </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"><img src="img/2.jpg" class="img-fluid" alt=""></div>
                <input type="checkbox">
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"><img src="img/3.jpg" class="img-fluid" alt=""></div>
                <input type="checkbox">
            </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/4.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/5.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/6.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/7.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/8.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-img"><img src="img/9.jpg" class="img-fluid" alt=""></div>
              <input type="checkbox">
          </div>


        </div>

      </div>
    </section><!-- End My Portfolio Section -->



  </main><!-- End #main -->

<!-- PORT 11 -->
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
                                  <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Que bebe lindo!</small>
                              </p>
                              <i class="fas fa-trash-alt"></i>
                              <p class="text-justify p-2 bg-light">
                                  <small><span class="text-primary "><strong>Ana Silva:</strong></span> Obrigada, tenho uma galeria cheio delas!</small>
                              </p>
                              <i class="far fa-edit"></i>
                              <i class="fas fa-trash-alt"></i>
                          </div>
                      </div>
                      <div class="container text-center">
                          <span id="gosto" onclick="gosto()" align="left"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                          <small id="gostar" style="text-align: center">10 gostos</small>
                      </div>


                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End PORT -->



  <!-- ======= Login======= -->
  <div class="modal fade" id="adiciona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Adiciona Fotografias</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <label>Escolha a fotografia para essa Galeria</label>
                  <p></p>
                  <input type="file" name="fotografia">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-warning">Adicionar</button>
              </div>
          </div>
      </div>
  </div>
  <!--End Login -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <script>
      function gosto() {
          document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
          document.getElementById("gostar").innerHTML = "11 gostos";
      }
  </script>>
</body>
<?php
bottom();

?>