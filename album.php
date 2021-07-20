<?php
include_once("includes/body.inc.php");
top1();

$id=intval($_GET['idAlbum']);

$sql="select *,count(fotoAlbumId) as f from fotos inner join albuns on fotoAlbumId=albumId
        inner join fotografos on albumFotografoId=fotografoPerfilId inner join perfis on perfilId=fotografoPerfilId  
        where albumId=$id" ;

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
          <small><a href="perfil.php?id=<?php echo $dados['albumFotografoId']?>">Voltar</a></small>
          <br>
          <br>

          <div class="section-title">

              <span><?php echo $dados['perfilNome']?></span>
              <h2><?php echo $dados['perfilNome']?></h2>
              <h2><?php echo $dados['albumNome']?></h2>
              <p><?php echo $dados['albumData']?> | <?php echo $dados['f']?></p>

          </div>

          <div class="content pl-lg-4 d-flex flex-column justify-content-center">
              <br>
              <?php
              if(isset($_SESSION['id'])==$dados['albumFotografoId']){?>


                      <a href="adicionaFoto.php?id=<?php echo $id?>"><i class="fas fa-plus" style="color: #ffb459; text-align: right"></i><small> Adicionar foto</small></a>
            <?php


              }?>
          </div>
      <br>
      <br>

        <div class="row portfolio-container">
            <?php
                if($dados['f']<1){ ?>
                    <h2>Este album ainda não contem fotografias</h2>
                    <?php
                    }else{

                    ?>

                <?php
                $sql="select * from fotos where fotoAlbumId=$id";
                $resultFoto=mysqli_query($con,$sql);
                while ($dadosFoto=mysqli_fetch_array($resultFoto)) {
                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <a href="#" data-toggle="modal" onclick="mostraFoto(<?php echo $dadosFoto['fotoId']?>)">
                            <div class="portfolio-img"><img src="<?php echo $dadosFoto['fotoURL']; ?>" class="img-fluid" alt=""></div>
                        </a>
                        <br>
                        <?php
                                if(isset($_SESSION['id'])==$dados['albumFotografoId']){
                                    ?>


                                <a href="#" onclick="confirmaElimina(<?php echo $dadosFoto['fotoId']?>);"><h6 style="text-align: center"><i class="fas fa-trash-alt" style="color: #ffb459;"></i><small> Eliminar foto</small></h6></a>
                                <?php
                                }
                                ?>
                       </div>
                    <?php
                }}
                ?>

        </div>

  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
<?php
bottom();

?>