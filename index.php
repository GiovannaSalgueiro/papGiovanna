<?php
include_once("includes/body.inc.php");
top();


$sql = "select *, count(gostoFotoId) as n from fotos inner join gostos on fotoId=gostoFotoId group by fotoId, fotoURL order by n desc limit 3";
$result=mysqli_query($con,$sql);

?>

<!-- <h1><?php if(isset($_SESSION['id'])) echo $_SESSION['nome']?></h1> -->
<main id="main">

    <!-- ======= Top post ======= -->
    <section id="topPost" class="services">
       <div class="container">

           <div class="section-title">
               <span>Top Posts</span>
               <h2>Top Posts</h2>
               <p>Imagens mais populares</p>
           </div>


           <div class="row">
               <?php
               while ($dados = mysqli_fetch_array($result)) {
               ?>
               <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                   <div class="post-box">

                       <a href="#" data-toggle="modal" onclick="mostraFoto(<?php echo $dados['fotoId']?>)">
                           <img width="320" src="<?php echo $dados['fotoURL']?>" class="post-img" alt="">
                       </a>
                       <h7 class="title"><?php echo $dados['n']?>gostos</h7>

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
            $sql="select * from albuns order by albumData desc limit 6";
            $resultAlbum=mysqli_query($con, $sql);

            $sqlCriador="select * from fotografos inner join albuns on fotografoPerfilId=albumFotografoId ";
            $resultCriador=mysqli_query($con, $sqlCriador);
            $dadosCriador=mysqli_fetch_array($resultCriador);
            ?>

            <div class="row portfolio-container">
                <?php
                while ($dadosAlbum = mysqli_fetch_array($resultAlbum)) {
                ?>

                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-img"><img src="<?php echo $dadosAlbum['albumCapaURL']?>"  class="img-fluid" alt=""></div>
                        <div class="portfolio-info">

                            <h4><?php echo $dadosAlbum['albumNome']?></h4>
                            <p><?php echo $dadosAlbum['albumData']?></p>
                            <a href="album.php?idAlbum=<?php echo $dadosAlbum["albumId"]?>&idFotografo=<?php echo $dadosCriador["fotografoPerfilId"]?>"><i class="far fa-eye"></i></a>
                        </div>
                    </div>

                    <?php

                }
                ?>
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
              </div>

        </div>
    </section>--><!-- End My Portfolio Section -->



</main><!-- End #main -->


<?php
bottom(HOME);

?>
