<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['idFoto']);
$sql="Select * from fotos inner join albuns on fotoAlbumId=albumId where fotoId=$id";
$sql2="Select * from fotografos";

$resultId = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 id="teste"></h1>
            <?php
            while ($dados2 = mysqli_fetch_array($result2)) {
            ?>
            <a href="ana.php"><span style="color:#4F4F4F" class="fas fa-camera-retro"></span><h7 class="title" style="text-align: center; color:#4F4F4F">&nbsp;&nbsp;&nbsp;<?php echo $dados2['fotografoNome']?></h7></a>
            <?php
            }
            ?>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>

        <div class="modal-body">
            <div class="text-center">
                <?php
                while ($dadosId = mysqli_fetch_array($resultId)) {
                ?>
                <div class="row">

                    <div class="col-12">
                        <a href="port1.php"><h8><?php echo $dadosId['albumNome']?></h8></a>
                    </div>

                </div>

                <div class="row">

                        <div class="col-8">

                            <img width="320" src="<?php echo $dadosId['fotoURL']?>" class="post-img" alt="">

                        </div>

                    <div class="col-4" style="height: 200px;overflow-y: scroll;"> <!-- alterar por PHP a altura da div (imagem) -->
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>
                        <p class="text-justify p-2 bg-light">
                            <small><span class="text-primary "><strong>Joana Silva:</strong></span>  Adorei ver os ciclistas a passar em frente � minha casa...</small>
                        </p>

                    </div>
                    <?php
                    }
                    ?>


                </div>
                <div class="container text-center">
                    <span id="gosto" onclick="gosto()" align="left"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                    <small id="gostar" style="text-align: center"> 22 gostos</small>
                </div>


            </div>
        </div>
    </div>


</div>