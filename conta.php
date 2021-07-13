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
          <span>Conta</span>
          <h2>Conta</h2>
            <?php
            if (isset($_SESSION['id'])){
            $sqlNome="select perfilNome from perfis where perfilId=".$_SESSION['id'];
            $resultNome=mysqli_query($con,$sqlNome);
            $dadosNome=mysqli_fetch_array($resultNome);
            if($dadosNome['perfilNome']==$dados['perfilNome']){
                ?>


        <h8><strong><a href="perfil.php?id=<?php echo $id ?>"> Ir para o meu perfil</a></strong></h8>
            <?php
            }}
            ?>
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

                         <!-- <span id=notif onclick="notif()" align="left">

                                <i class="fas fa-bell fa-2x" style="color: #ffb459"></i>

                                <i class="fas fa-bell-slash fa-2x" aria-hidden="true" style="color: #ffb459"></i>
                                </span>

                            <span id=notif onclick="notif(</?php echo $id?>)" align="left">
                            -->
                            <?php
                             // verifica se o utilizador favorita o criador
                            /*$sql="select * from perfis where perfilId=".$_SESSION['id']." and perfilNotificacao=".$id;
                            mysqli_query($con,$sql);
                            if(mysqli_affected_rows($con)>0){
                                ?>
                                <i class="fas fa-bell fa-2x" style="color: #ffb459"></i>
                                <?php
                            }else{
                                ?>
                                <i class="fas fa-bell-slash fa-2x" aria-hidden="true" style="color: #ffb459"></i>
                                <?php
                            }*/
                            ?>
<!--
                    </span>
                    -->
                          <?php
                          $sqlA="select *, count(notificacaoPerfilId) as nAvisos from notificacoes inner join perfis on notificacaoPerfilId=perfilId 
                     where notificacaoTipo='aviso'";

                          $resultA=mysqli_query($con,$sqlA);
                          $dadosA=mysqli_fetch_array($resultA);
                          ?>

                      </div>
                      <a href="editaconta.php?id=<?php echo $dados["perfilId"]?>"><i class="fas fa-user-edit" style="color: #ffb459; text-align: right"></i><small> Editar perfil</small></a>
                      <br>
                      <!--<a href="definicao.php"><i class="fas fa-cog" style="color: #ffb459; text-align: right"></i><small> Definições da conta</small></a>-->
                      <br>
                      <br>

                      <div class="row">
                          <div class="col-lg-8" style="text-align: center">
                              <br>
                              <br>
                              <a href="#" data-toggle="modal" data-target="#seguidores" style="color: #444444"> <h8><strong>
                                  <?php $sqlfav2="select count(favoritoFotografoId) from favoritos where favoritoFotografoId=".$id;
                                          $sqlFav=mysqli_query($con,$sqlfav2);
                                          $dadosFav=mysqli_fetch_array($sqlFav);
                                          $fav=(int)$dadosFav['count(favoritoFotografoId)']; echo $fav;
                                  ?> Seguidores</strong></h8></a>

                          </div>
                          <div class="col-lg-4" style="text-align: center">
                              <br>
                              <br>
                              <a href="#" data-toggle="modal" data-target="#seguindo" style="color: #444444"><h8><strong>
                              <?php $sqlSeg2="select count(favoritoPerfilId) from favoritos where favoritoPerfilId=".$id;
                              $sqlSeg=mysqli_query($con,$sqlSeg2);
                              $dadosSeg=mysqli_fetch_array($sqlSeg);
                              $seg=(int)$dadosSeg['count(favoritoPerfilId)']; echo $seg;
                              ?> Seguindo</strong></h8></a>
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
<div class="modal fade" id="seguidores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Seguidores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $sqlSeguidores="select * from fotografos inner join favoritos on fotografoId=favoritoFotografoId where favoritoFotografoId=".$id;
            $resultSeguidores=mysqli_query($con,$sql);
            ?>
            <div class="modal-body">
                <form action="login.php" method="post" >
                    <div class="form-group">
                        <?php
                        while ($dadosSeguidores=mysqli_fetch_array($resultSeguidores)) {
                        ?>
                        <label><?php echo $dadosSeguidores['perfilNome']?></label>
                        <?php
                        }
                        ?>
                    </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="seguindo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Seguidores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            $sqlSeguidores="select * from perfis inner join favoritos on perfilId=favoritoPerfilId where favoritoPerfilId=".$id;
            $resultSeguidores=mysqli_query($con,$sql);
            ?>
            <div class="modal-body">
                <form action="login.php" method="post" >
                    <div class="form-group">
                        <?php
                        while ($dadosSeguidores=mysqli_fetch_array($resultSeguidores)) {
                        ?>
                        <label><?php echo $dadosSeguidores['perfilNome']?></label>
                        <?php
                        }
                        ?>
                    </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>