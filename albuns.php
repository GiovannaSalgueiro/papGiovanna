<?php
include_once("includes/body.inc.php");
top1();

$idA=intval($_GET['idAlbum']);
$idF=intval($_GET['idFotografo']);
$sql="select *,count(fotoAlbumId) as f from fotos inner join albuns on fotoAlbumId=albumId
        inner join fotografos on albumFotografoId=fotografoId where fotoId=$idA" ;

$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameFoto.php",
            type:"post",
            data:{
                idFoto:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a foto:'+result+"?"))

                    window.location="eliminaFoto.php?id=" + id;
            }
        })
    }
</script>

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= My Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">


          <br>
          <small><a href="index.php">Voltar</a></small>
          <br>
          <br>

      <br>
      <br>
          <?php
          $sqlFotografo="select * from fotografos inner join albuns on fotografoId=albumFotografoId where albumFotografoId=$idF";
          $resultFotografo=mysqli_query($con,$sqlFotografo);
          $dadosFotografo=mysqli_fetch_array($resultFotografo);

          $sqlF="select count(fotoAlbumId) as f from albuns inner join fotos on albumId=fotoAlbumId inner join fotografos on albumFotografoId=fotografoId where fotoAlbumId=$idA" ;

          $resultF=mysqli_query($con,$sqlF);
          $dadosF=mysqli_fetch_array($resultF);
          ?>
          <div class="section-title">

              <span><?php echo $dadosFotografo['fotografoNome']?></span>
              <h2><?php echo $dadosFotografo['fotografoNome']?></h2>
              <h2><?php echo $dadosFotografo['albumNome']?></h2>
              <p><?php echo $dadosFotografo['albumData']?> | <?php echo $dadosF['f']?></p>

          </div>

        <div class="row portfolio-container">
            <?php

                $sql="select * from fotos where fotoAlbumId=$idA";
                $resultFoto=mysqli_query($con,$sql);
                while ($dadosFoto=mysqli_fetch_array($resultFoto)) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="#" data-toggle="modal" onclick="mostraFoto(<?php echo $dadosFoto['fotoId']?>)">
                            <img src="<?php echo $dadosFoto['fotoURL']; ?>" class="img-fluid" alt="">

                        </a>
                        <br></div>
                    <?php
                }
             ?>



        </div>

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




  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
<?php
bottom();

?>