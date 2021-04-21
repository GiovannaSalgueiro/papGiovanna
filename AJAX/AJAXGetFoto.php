<?php
include_once ("../includes/body.inc.php");


$id=intval($_POST['idFoto']);
$sql="Select * ,count(*) as n
        from fotos inner join gostos on fotoId=gostoFotoId
        inner join albuns on fotoAlbumId=albumId 
        inner join fotografos on fotografoId=albumFotografoId         
        where fotoId=$id";

$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>

<div class="modal-dialog modal-lg" style="min-height: 500px">
    <div class="modal-content" style="min-height: 500px">
        <div class="modal-header">
            <h1 id="teste"></h1>

            <a href="perfis.php?id=<?php echo $dados['fotografoId']?>"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;<?php echo $dados['fotografoNome']?></h7></a>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>

        <div class="modal-body">
            <div class="text-center">

                <div class="row">

                    <div class="col-12">
                        <a href="albuns.php?id=<?php echo $dados['albumId']?>"><h6><?php echo $dados['albumNome']?></h6></a>
                    </div>

                </div>
                <div class="row">

                        <div class="col-8">

                            <img width="500" src="<?php echo $dados['fotoURL']?>" class="post-img" alt="">

                        </div>
                    <?php
                    $sql = "select * from perfis inner join comentarios on perfilId=comentarioPerfilId
            inner join fotos on fotoId=comentarioFotoId where fotoId=$id";
                    $resultTexto = mysqli_query($con, $sql);
                    ?>
                    <div class="col-4" style="overflow-y: scroll;" id="comentarios"> <!-- alterar por PHP a altura da div (imagem) -->
                        <?php
                        while ($dadosTexto = mysqli_fetch_array($resultTexto)) {
                        ?>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary ">
                            <strong><?php echo $dadosTexto['perfilNome']?></strong></span>&nbsp;<?php echo $dadosTexto['comentarioTexto']?></small>
                        </p>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="container text-left">
                    <div id="gostos">
                        <span id="gosto" onclick="gosto(<?php echo $id?>)" align="left">
                            <?php
                            // verifica se o utilizador gosta da foto
                            $sql="select * from gostos where gostoPerfilId=".$_SESSION['id']." and gostoFotoId=".$id;
                            mysqli_query($con,$sql);
                            if(mysqli_affected_rows($con)>0){
                                ?>
                                <i class="fas fa-heart" style="color: red" aria-hidden="true"></i>
                            <?php
                            }else{
                              ?>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <?php
                            }
                            ?>
                                <small id="gostar" style="text-align: center"> <?php echo $dados['n']?>  gostos</small>
                            </span>

                    </div>


                <!--    <form action="confirmaNovoComentario.php" method="post" enctype="multipart/form-data">-->
                        <div class="container text-right"><small><input id="comentarioTexto" type="text" name="comentarioTexto" placeholder="Adicione um comentário..." style="width: 60%"></small>&nbsp;
                            <button onclick="comentario(<?php echo $id?>)"><i class="fas fa-comment"></i></button></div>
                    <!-- </form>  -->
                </div>
            </div>
        </div>
    </div>


</div>