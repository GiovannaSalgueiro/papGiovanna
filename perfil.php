<?php
include_once("includes/body.inc.php");
top1();
$id=intval($_GET['id']);
/*
echo $sql="select *, count(albumFotografoId) as p from fotografos inner join albuns on fotografoId=albumFotografoId 
    inner join perfis on perfilId= fotografoPerfilId where perfilId=$id" ;
*/
$sql="select * from perfis inner join fotografos on perfilId=fotografoPerfilId where perfilId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>
    <script>
        function confirmaEliminaAlbum(id) {
            $.ajax({
                url:"AJAX/AJAXGetNameAlbum.php",
                type:"post",
                data:{
                    idAlbum:id
                },
                success:function (result){
                    if(confirm('Deseja eliminar todo o album :  ' +result+" ?"))

                        window.location="eliminaAlbum.php?id=" + id;
                }
            })
        }


    </script>

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Me Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <span>Perfil</span>
          <h2>Perfil</h2>
        </div>

        <div class="row">
          <img src="<?php echo $dados['fotografoFotoURL']?>" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <!-- <a href="#" data-toggle="modal" data-target="#edita"> -->
                <?php

                if(isset($_SESSION['id'])){
                    /*
                    $sqlNome="select perfilNome from perfis where perfilId=".$_SESSION['id'];
                    $sql1="select perfilNome from perfis where perfilId=".$id;
                    $resultNome=mysqli_query($con,$sqlNome);
                    $result1=mysqli_query($con,$sql1);
                    $dadosNome=mysqli_fetch_array($resultNome);
                    $dados1=mysqli_fetch_array($result1);
                    */
                if($id==$_SESSION['id']){
                    ?>
                    <a href="editaperfil.php?id=<?php echo $dados["fotografoPerfilId"]?>"><i class="fas fa-user-edit" style="color: #ffb459; text-align: right"></i><small> Editar perfil</small></a>

                    <?php
                }else{?>
                    <span id="favorito" onclick="favorito(<?php echo $id?>)" align="left">
                            <?php
                            // verifica se o utilizador favorita o criador
                            $sql="select * from favoritos where favoritoPerfilId=".$_SESSION['id']." and favoritoFotografoId=".$id;
                            mysqli_query($con,$sql);
                            if(mysqli_affected_rows($con)>0){
                                ?>
                                <i class="fas fa-star fa-2x" style="color: #ffb459"></i>
                                <?php
                            }else{
                                ?>
                                <i class="far fa-star fa-2x" aria-hidden="true" style="color: #ffb459"></i>
                                <?php
                            }}}else{
                            }
                            ?>

                    </span>


                <div class="row">
                <div class="col-lg-6">
                  <br>
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong> <?php echo $dados['perfilNome']?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Telemovel:</strong> <?php echo $dados['fotografoTelemovel']?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Cidade:</strong> <?php echo $dados['fotografoCidade']?></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <br>
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $dados['perfilEmail']?></li>

                        <?php if($dados['fotografoFreelancer']=== 'sim'){?>
                        <li><i class="icofont-rounded-right"></i> <strong>Freelance: </strong>disponível
                        <?php
                        }else{?>
                        <li><i class="icofont-rounded-right"></i> <strong>Freelance: </strong>indisponível
                            <?php }?>
                    </li>
                  </ul>
                </div>
              </div>
                <br>
                <br>
                <br>
              <div class="row mt-n4">

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">

                  <div class="count-box">
                    <i class="icofont-heart-alt" style="color:#FA5858;"></i>
                      <span data-toggle="counter-up"><?php
                          $sqlGosto="select count(gostoPerfilId) as nGostos from gostos inner join fotos on gostoFotoId=fotoId inner join albuns on fotoAlbumId=albumId
inner join fotografos on albumFotografoId=fotografoPerfilId where fotografoPerfilId=".$id;
                          $res=mysqli_query($con,$sqlGosto);
                          $dadosGosto=mysqli_fetch_array($res);
                          echo $dadosGosto['nGostos'];?>
                      </span>
                    <p><strong>Gostos</strong> Total de gostos</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                    <span data-toggle="counter-up"><?php
                        $sql="select count(*) as nAlbuns from albuns inner join fotografos 
                        on albumFotografoId=fotografoPerfilId where fotografoPerfilId=".$id;
                          $res=mysqli_query($con,$sql);
                          $dadosA=mysqli_fetch_array($res);
                          echo $dadosA[0];?></span>
                    <p><strong>Projetos</strong> concluidos</p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                    <span data-toggle="counter-up">
                        <?php
                            if(!is_null($dados['fotografoAnoInicio'])){
                                $n=intval(date("Y")) - $dados['fotografoAnoInicio'];
                                echo $n==0?" - ":$n;
                            }else{
                                echo '-';
                            }

                        ?>


                    </span>
                    <p><strong>Anos de experiencia </strong> </p>
                  </div>
                </div>

                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="icofont-star" style="color: #ffb459;"></i>
                      <span data-toggle="counter-up">
                          <?php $sqlfav2="select count(favoritoFotografoId) from favoritos where favoritoFotografoId=".$id;
                          $sqlFav=mysqli_query($con,$sqlfav2);
                          $dadosFav=mysqli_fetch_array($sqlFav);
                          $fav=(int)$dadosFav['count(favoritoFotografoId)']; echo $fav;?>
                    </span>
                    <p><strong>Recomendado</strong> Pessoas que gostaram do meu trabalho e recomendam.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
            <br>
              <div class="row">
                  <div class="col-lg-4" style="text-align: center">
                      <br>
                      <br>
                      <?php
                      $sqlP="select count(fotoAlbumId) as f from albuns inner join fotos on albumId=fotoAlbumId inner join fotografos on albumFotografoId=fotografoPerfilId where fotografoPerfilId=$id" ;

                      $resultP=mysqli_query($con,$sqlP);
                      $dadosP=mysqli_fetch_array($resultP);
                      ?>
                      <h8><strong> <?php echo $dadosP['f']?> Publicações</strong></h8>
                  </div>
                  <div class="col-lg-4" style="text-align: center">
                      <br>
                      <br>
                      <h8><strong>
                              <?php $sqlfav2="select count(favoritoFotografoId) from favoritos where favoritoFotografoId=".$id;
                              $sqlFav=mysqli_query($con,$sqlfav2);
                              $dadosFav=mysqli_fetch_array($sqlFav);
                              $fav=(int)$dadosFav['count(favoritoFotografoId)']; echo $fav;
                              ?> Seguidores</strong></h8>

                  </div>
                  <div class="col-lg-4" style="text-align: center">
                      <br>
                      <br>
                      <h8><strong>
                              <?php $sqlSeg2="select count(favoritoPerfilId) from favoritos where favoritoPerfilId=".$id;
                              $sqlSeg=mysqli_query($con,$sqlSeg2);
                              $dadosSeg=mysqli_fetch_array($sqlSeg);
                              $seg=(int)$dadosSeg['count(favoritoPerfilId)']; echo $seg;
                              ?> Seguindo</strong></h8>
                  </div>
              </div>
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

        </div>
        <div class="content pl-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
                <?php
                    if(isset($_SESSION['id'])){

                    if($id==$_SESSION['id']){
                ?>

                <div class="col-2"><a href="adicionaAlbum.php?id=<?php echo $dados["fotografoPerfilId"]?>"><i class="fas fa-plus" style="color: #ffb459; text-align: right"></i><small> Adicionar album</small></a></div>
                    <?php
                        }}?>
            </div>
          <!-- <a href="#" data-toggle="modal" data-target="#adicionar" style="text-align: right"> -->
        </div>

          <br>
          <!-- ***************************************************************** AJAX -->
        <div id="portfolioAlbuns">

        </div>
        <!-- *******************************************************************************************  -->
      </div>
    </section><!-- End My Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Edita======= -->
  <div class="modal fade" id="edita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="InputName">Nome:</label>
              <input type="name" class="form-control" id="InputName1" aria-describedby="emailHelp" placeholder="Ana Silva">

            </div>
            <div class="form-group">
              <label for="InputEmail">Email:</label>
              <input type="email" class="form-control" id="InputEmail" placeholder="anaSilva@gmail.com">
            </div>
            <div class="form-group">
              <label for="InputPassword1">Palavra-passe</label>
              <input type="password" class="form-control" id="InputPassword1" placeholder="*********">
            </div>


            <label for="inputEmail4" class="form-label">Telemovel</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="918 632 176">
            <label for="inputCity" class="form-label">Localidade</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Maceira, Leiria">
            <label for="inputAddress2" class="form-label">Website</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="www.example.com"><br>
            <label for="inputState" class="form-label">Freenlace</label>
            <select id="inputState" class="form-select">
              <option selected>Disponivel</option>
              <option>Não disponivel</option>
            </select>
          <p></p>
          <label>Foto</label>
          <input type="file" name="logoEmpresa">
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-warning">Editar</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--End Edita -->

    <!-- ======= Adiciona=======
    <div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adiciona Galeria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="InputName">Nome:</label>
                <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Ana Silva">
              </div>
                <div class="form-group">
                    <label for="InputName">Data:</label>
                    <input type="text" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="20.05.2019">
                </div>

              <label>Foto de capa</label>
              <input type="file" name="logoEmpresa">
            </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-warning">Adiciona</button>
            </div>
          </div>
        </div>
      </div>
      </div>
      End Adiciona -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom(PERFIL,$id);
?>