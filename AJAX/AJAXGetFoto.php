<?php
include_once ("../includes/body.inc.php");
$id=intval($_POST['idFoto']);
$sql = "select * from fotos where fotoId=$id";
$resultId = mysqli_query($con, $sql);
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 id="teste"></h1>

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