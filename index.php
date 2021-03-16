<?php
include_once("includes/body.inc.php");
top();

$sql = "select * from fotos";
$resultFotos = mysqli_query($con, $sql);

?>


<main id="main">

    <!-- ======= Top post ======= -->
    <section id="topPost" class="services">
       <div class="container">

           <div class="section-title">
               <span>Top Posts</span>
               <h2>Top Posts</h2>
               <p>Imagens mais populares da semana</p>
           </div>


           <div class="row">
               <?php

               while ($dadosFotos = mysqli_fetch_array($resultFotos)) {
               ?>
               <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                   <div class="post-box">
                       <a href="#" data-toggle="modal" data-target="#top1">
                           <img width="320" src="<?php echo $dadosFotos['fotoURL']?>" class="post-img" alt="">
                       </a>
                       <h7 class="title">10 gostos</h7>

                   </div>
               </div>
                   <?php
               }
               ?>

           </div>
       </div>
   </section>
    <!-- <section id="topPost" class="services">
       <div class="container">

           <div class="section-title">
               <span>Top Posts</span>
               <h2>Top Posts</h2>
               <p>Imagens mais populares da semana</p>
           </div>


           <div class="row">
               <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                   <div class="post-box">
                       <a href="#" data-toggle="modal" data-target="#top">
                           <img width="320" src="assets/img/portfolio/port-1.jpg" class="post-img" alt="">
                       </a>

                       <h7 class="title">85 gostos</h7>

                   </div>
               </div>
               <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                   <div class="post-box">
                       <a href="#" data-toggle="modal" data-target="#top1">
                           <img width="320" src="assets/img/portfolio/port-2.jpg" class="post-img" alt="">
                       </a>
                       <h7 class="title">10 gostos</h7>

                       <img width="320" src="img/2.jpg" class="post-img" alt=""></a>
                       <h7 class="title">53 gostos</h7>

                   </div>
               </div>
               <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                   <div class="post-box">
                       <img width="320" src="img/principal2.jpg" class="post-img" alt="">
                       <h7 class="title">83 gostos</h7>



                   </div>
               </div>
           </div>
       </div>
   </section> -->
   <!-- End Top posts Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <span>Novidades</span>
                <h2>Novidades</h2>
                <p>Últimas entradas</p>
            </div>

            <?php
            $sql = "select * from albuns";
            $resultAlbuns = mysqli_query($con, $sql);
            ?>

            <div class="row portfolio-container">
                <div class="row">
                    <?php
                    while ($dadosAlbuns = mysqli_fetch_array($resultAlbuns)) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="<?php echo $dadosAlbuns['albumCapaURL']?>"  class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4><?php echo $dadosAlbuns['albumNome']?></h4>
                            <p><?php echo $dadosAlbuns['albumData']?></p>
                            <a href="port1.php"><i class="fas fa-plus" style="color: #ffb727"></i></a>
                            <a href="editaAlbum.php"><i class="far fa-edit"></i></a>
                            <input type="checkbox">
                        </div>
                    </div>
                        <?php

                    }
                    ?>

                </div>
            </div>

        </div>
    </section>
    <!-- ======= Novidades ======= -->
    <!--<section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title">
                <span>Novidades</span>
                <h2>Novidades</h2>
                <p>Últimas entradas</p>
            </div>



            <div class="row portfolio-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="img/principal1.jpg" height="231" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Sessão de fografia dos bébes de Março</h4>
                            <p>22.11.2020</p>
                            <a href="port1.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="img/5.jpg" height="231" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Sessão de fografia dos bébes de Março</h4>
                            <p>22.11.2020</p>
                            <a href="port1.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img src="img/4.jpg" height="231" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Sessão de fografia dos bébes de Março</h4>
                            <p>22.11.2020</p>
                            <a href="port1.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <h4>Almoço Americano</h4>
                            <p>15.10.2019</p>
                            <a href="port2.html"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>


                </div>



            </div>

        </div>
    </section>--><!-- End My Portfolio Section -->



</main><!-- End #main -->
<div class="modal fade" id="top1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php
    $sql = "select * from fotos where fotoId=1";
    $resultId = mysqli_query($con, $sql);
    ?>
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

                    <div class="row">

                        <?php
                        while ($dadosId = mysqli_fetch_array($resultId)) {
                        ?>
                        <div class="col-8">

                            <img width="320" src="<?php echo $dadosId['fotoURL']?>" class="post-img" alt="">

                        </div>
                            <?php
                        }
                        ?>
                        <div class="col-4" style="height: 200px;overflow-y: scroll;"> <!-- alterar por PHP a altura da div (imagem) -->
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
<script>
    function gosto() {
        document.getElementById("gosto").innerHTML = "<i class=\"fas fa-heart\" style='color: red'></i>";
        document.getElementById("gostar").innerHTML = "23 gostos";
    }
</script>
<?php
bottom(HOME);

?>
