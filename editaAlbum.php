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

                <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-lg-4">
                            <br>
                            <ul>
                                <li> <strong>Nome do album:</strong></li><br>
                                <li> <strong>Data do album:</strong></li><br>
                                <li> <strong>Capa do album:</strong></li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <br>
                            <ul>
                                <small><input type="text" name="albumNome" value="<?php echo $dados['albumNome']?>"></small>

                            </ul>
                            <ul>
                                <small><input type="date" name="albumData" value="<?php echo $dados['albumData']?>"></small>
                            </ul>
<br>
                            <ul>
                                <small><input type="file" name="albumCapaURL" src="../<?php echo $dados['albumCapaURL']?>"></small>
                            </ul>
                        </div>

                        <div class="col-lg-12"  style="text-align: center"><br><br>
                            <button type="Submit" class="btn btn-warning">Edita</button><br>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </form>

    </div><br><hr>
</section>
