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

        <div class="row">
          <img src="imagens/perfil.png">
          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <!-- <a href="#" data-toggle="modal" data-target="#edita"> --><a href="editaperfil.php?id=<?php echo $dados["perfilId"]?>"><i class="fas fa-user-edit" style="color: #ffb459; text-align: right"></i><small> Editar perfil</small></a>
              <div class="row">
                <div class="col-lg-6">
                  <br>
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Nome:</strong> <?php echo $dados['perfilNome']?></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email:</strong></li>
                    <li><i class="icofont-rounded-right"></i> <strong>Palavra Passe:</strong></li>
                  </ul>

                </div>
                  <div class="col-lg-6" align="right">

                      <i class="fas fa-bell fa-2x" style="color: #ff9900"></i>
                  </div>

              </div>

            </div><!-- End .content-->
            <br>

          </div>
        </div>
          <hr>
          <div class="row">


          <div class="col-lg-8 d-flex flex-column align-items-stretch">
            <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                <div class="row">

                    <?php
                    $sql="select * from perfis inner join favoritos on perfilId=favoritoPerfilId
                            inner join fotografos on favoritoFotografoId=fotografoId where favoritoPerfilId=".$_SESSION['id']." ";
                    $resultFotografo=mysqli_query($con, $sql);
                    ?>
                <div class="col-lg-6">
                    <?php
                        while ($dadosFotografo=mysqli_fetch_array($resultFotografo)) {
                    ?>
                  <ul>
                    <li><i class="icofont-rounded-right"></i><strong><?php echo $dadosFotografo['fotografoNome']?></strong>&nbsp;<button type="button" class="btn btn-outline-warning btn-sm" style="border-radius: 12px">a seguir</button></li>

                  </ul>
                    <?php
                        }
                    ?>
                </div>

              </div>


            </div><!-- End .content-->
            <br>

          </div>
              <img src="imagens/camera2.jpg">
        </div>

      </div>
    </section><!-- End About Me Section -->






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





  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>
<?php
bottom();
?>