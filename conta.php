<?php
include_once("includes/body.inc.php");
top1();
$id=intval($_GET['id']);
$sql="select * from perfis  where perfilId=$id" ;

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Perfil</span>
          <h2>Perfil</h2>
        </div>

          <div class="section-title">
            <h2 style="text-align: left">
                <?php echo $dados['perfilNome']?>
            </h2>
          </div>

          <div class="row">
              <img src="imagens/perfil.png">
              <div class="col-lg-8 d-flex flex-column align-items-stretch">
                  <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                      <div class="col-lg-12" align="right">

                          <i class="fas fa-bell fa-2x" style="color: #ff9900"></i>
                      </div>
                      <a href="editaconta.php?id=<?php echo $dados["perfilId"]?>"><i class="fas fa-user-edit" style="color: #ffb459; text-align: right"></i><small> Editar perfil</small></a>
                      <br>
                      <a href="sett.php"><i class="fas fa-cog" style="color: #ffb459; text-align: right"></i><small> Definições do perfil</small></a>
                      <br>
                      <br>
                      <div class="row">
                          <div class="col-lg-4" style="text-align: center">
                              <h8><strong> 5 Publicações</strong></h8>
                          </div>
                          <div class="col-lg-4" style="text-align: center">
                              <h8><strong> 105 Seguidores</strong></h8>
                          </div>
                          <div class="col-lg-4" style="text-align: center">
                              <h8><strong> 205 Seguindo</strong></h8>
                          </div>
                      </div>

                  </div>
              </div>

          </div>
      </div>
    <hr>
    </section><!-- End About Me Section -->


  </main><!-- End #main -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom();
?>