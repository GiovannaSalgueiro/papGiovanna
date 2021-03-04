<?php
include_once("includes/body.inc.php");
top();

?>


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