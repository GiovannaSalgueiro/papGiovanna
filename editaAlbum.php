<?php
include_once ("includes/body.inc.php");
top1();
$id=intval($_GET['id']);
$sql="select * from albuns where albumId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

?>



<section id="topPost" class="services">
    <div class="container">
        <div class="section-title">
            <span>Editar albuns</span>
            <h2>Editar albuns</h2>
        </div>
        <form action="confirmaEditaAlbum.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="row">
                <img src="<?php echo $dados['albumCapaURL']?>" class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <div class="col-lg-8 d-flex flex-column align-items-stretch">
                <small><input type="file" name="capaAlbum"></small>
                <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-lg-4">
                            <br>
                            <ul>
                                <li> <strong>Nome do album:</strong></li>
                                <li> <strong>Data:</strong></li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <br>
                            <ul>
                                <small><input type="text" name="nomeAlbum" value="<?php echo $dados['albumNome']?>"></small>
                                <p><small><input type="text" name="dataAlbum" value="<?php echo $dados['albumData']?>"></small>
                            </ul>
                        </div>

                        <div class="col-lg-12"  style="text-align: center">
                            <button type="Submit" class="btn btn-warning">Edita</button><br>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </form>
        <br>
    </div>
</section>
